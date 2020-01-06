<?php
require_once '../views/RedirectView.php';
require_once '../providers/ImageService.php';
require_once '../views/ImageAddView.php';
require_once '../views/ImagesView.php';
require_once '../models/Image.php';

class ImageController 
{
    public function index()
    {
        //ImageService::delete_image('5e13a3366e955243a7021b22');
        $index = 1;
        if(isset($_SESSION['page']))
        { 
            $index = $_SESSION['page'];
            unset($_SESSION['page']);
        }

        $images = ImageService::get_images($index);

        $fav = ['1'];
        if(isset($_SESSION['favourites']))
        {
            $fav = $_SESSION['favourites'];
            $fav = explode(',', $fav);
        }


        return new ImagesView($index, $images, $fav);
    }

    public function new()
    {
        if(isset($_SESSION['error_message']))
        {
            $message = $_SESSION['error_message'];
            unset($_SESSION['error_message']); 
            return new ImageAddView($message);
        }
        else
        {
            return new ImageAddView('');
        }
    }

    public function add()
    {   
        $upload_ok = true;
        $image_type = '';
        $target_dir = "images/";
        $error_message = "";

        if($_POST['watermark'] == '')
        {
            $error_message = 'Proszę uzupełnić pole znak wody <br>';
            $upload_ok = false;
        }

        if($_POST['author'] == '')
        {
            $error_message = 'Proszę uzupełnić pole autor <br>';
            $upload_ok = false;
        }

        if($_POST['name'] == '')
        {
            $error_message = 'Proszę uzupełnić pole tytuł <br>';
            $upload_ok = false;
        }

        if(isset($_FILES["image"]) && $_FILES["image"]["size"] > 0) 
        {
            $file_path = $_FILES["image"]["tmp_name"];
            $file = $_FILES["image"]["name"];
            $image_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));

            if($image_type !== "jpg" && $image_type !== "png") 
            {
                $error_message .= "Przepraszamy, jednynie dozwolone formaty to jpg oraz png <br>";
                $upload_ok = 0;
            }

            if ($_FILES["image"]["size"] > 1024*1024)
            {
                $error_message .=  "Zdjecie jest za duże <br>";
                $upload_ok = 0;
            }
        }
        else
        {
            $upload_ok = 0;
            $error_message .=  "Nie dodano pliku <br>";
        }

        if($upload_ok)
        {

            $image = new Image($_POST['name'], $_POST['author'], $image_type);
            $image->save_image();

            $id = $image->get_id();
            $name = "{$id}.{$image_type}";
            $path = "{$target_dir}{$name}";

            if (!move_uploaded_file($file_path, $path)) 
            {
                $error_message .=  "Przepraszamy, wstąpił błąd przy przesyłaniu twojego zdjęcia <br>";
                ImageService::delete_image($id);
            }
            else
            {
                $watermark_path = "{$target_dir}/watermark_{$name}";
                $this->create_watermark($path, $watermark_path);
    
                $thumbnail_path = "{$target_dir}/thumbnail_{$name}";
                $this->create_thumbnail($path, $thumbnail_path);
            }
        }

        $_SESSION['error_message'] = $error_message;

        return new RedirectView('/image/new', 303);

    }


    private function create_watermark($path, $watermark_path)
    {
        $img_size = getimagesize($path);
        $height = $img_size[1];
        $width = $img_size[0];

        $stamp = $this->create_stamp($path);

        $img = NULL;
        $img = $this->create_image($path);

        $marge_right = $width*3/8;
        $marge_bottom = $height*3/8;
        $sx = imagesx($stamp);
        $sy = imagesy($stamp);

        $alpha_channel = imagecolorallocatealpha($img, 0, 0, 0, 127); 
        imagecolortransparent($img, $alpha_channel); 
        imagefill($img, 0, 0, $alpha_channel); 

        imagecopy($img, $stamp, imagesx($img) - $sx - $marge_right, imagesy($img) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));

        imagesavealpha($img, true);

        imagepng($img, $watermark_path);
        imagedestroy($stamp);
        imagedestroy($img);
    }

    private function create_stamp($path)
    {
        $text = $_POST['watermark'];
        $font = 50;
        $font_file = "../Roboto-Regular.ttf";
        $width = strlen($text) * $font / 1.5;
        $height = $font+20;

        $src = imagecreatetruecolor($width, $height);

        $fill_color = imagecolorallocatealpha($src, 0, 0, 0, 80);
        $font_color = imagecolorallocatealpha($src, 255, 255, 255, 80);

        imagesavealpha($src, true);
        imagealphablending($src, false);

        imagefill($src, 0, 0, $fill_color);
        imagettftext($src, $font, 0, 0, $height-10, $font_color, $font_file, $text);

        return $src;
    }

    private function create_image($target_file)
    {
        $img = NULL;
        $format = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if($format == "png")
        {
            $img = imagecreatefrompng($target_file);
        }
        else if ($format == "jpg")
        {
            $img = imagecreatefromjpeg($target_file);
        }
        
        return $img;
    }

    private function save_image($img, $img_target_file)
    {
        $format = strtolower(pathinfo($img_target_file, PATHINFO_EXTENSION));

        if($format == "png")
        {
            imagepng($img, $img_target_file);
        }
        else if ($format == "jpg")
        {
            imagepng($img, $img_target_file);
        }
    }

    public function create_thumbnail($path, $thumbnail_path)
    {
        $img_size = getimagesize($path);
        $or_height = $img_size[1];
        $or_width = $img_size[0];

        $img = NULL;
        $thumbnail_width = 200;
        $thumbnail_height = 215;

        $img = $this->create_image($path);

        if($img != FALSE)
        {
            $alpha_channel = imagecolorallocatealpha($img, 0, 0, 0, 127); 
            imagecolortransparent($img, $alpha_channel); 
            imagefill($img, 0, 0, $alpha_channel); 

            $thumbnail = @imagecreatetruecolor($thumbnail_width, $thumbnail_height);  
            imagecolortransparent($thumbnail, imagecolorallocate($thumbnail, 0, 0, 0));
            imagecopyresampled($thumbnail, $img, 0, 0, 0, 0, $thumbnail_width, $thumbnail_height, $or_width, $or_height);

            $this->save_image($thumbnail, $thumbnail_path);

            imagedestroy($img);
            imagedestroy($thumbnail);
        }
    }
}