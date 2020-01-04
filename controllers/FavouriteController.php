<?php

require_once '../views/FavouritesView.php';
require_once '../views/RedirectView.php';
require_once '../providers/ImageService.php';

class FavouriteController
{
    public function save()
    {
        if(isset($_POST['image']))
        {
            $images = $_POST['image'];

            $fav = '';
            if(isset($_SESSION['favourites']))
            {
                $fav = $_SESSION['favourites'];
            }

            $fav = explode(',', $fav);
            $str = '';

            $flag = false;
            foreach($images as $im)
            {
                foreach($fav as $f)
                {
                    if($im == $f)
                    {
                        $flag = true;
                    }
                }
                if(!$flag)
                {
                    $str .= $im . ',';
                }
                $flag = false;
            }

            rtrim($str, ',');

            if(isset($_SESSION['favourites']))
            {
                $_SESSION['favourites'] .= $str . "";
            }
            else
            {
                $_SESSION['favourites'] = $str;
            }

            
        }
        
        return new RedirectView('../gallery/'  . $_POST['index'], 303);
    }

    public function index()
    {
        $fav = '';
        $array =[];
        if(isset($_SESSION['favourites']))
        {
            $fav = $_SESSION['favourites'];
            $fav = explode(',', $fav);

            foreach($fav as $f)
            {
                if(trim($f) != '')
                {
                    $temp = ImageService::get_image($f);
                    $img  = new Image($temp['name'], $temp['author'], $temp['format'], $temp['_id']);
                    array_push($array, $img);
                }
            }
        }

        

        return new FavouritesView($array);
    }

    public function delete()
    {
        if(isset($_POST['image']))
        {
            $images = $_POST['image'];

            $fav = '';
            if(isset($_SESSION['favourites']))
            {
                $fav = $_SESSION['favourites'];
            }
    
            $fav = explode(',', $fav);
            $str = $_SESSION['favourites'];
    
            $flag = false;
            foreach($images as $im)
            {
                foreach($fav as $f)
                {
                    if(trim($im) == trim($f))
                    {
                        $str = str_replace(trim($f), "", $str);
                        continue;
                    }
                }
            }
    
            $_SESSION['favourites'] = $str; 
        }

        return new RedirectView('/favourites', 303);
    }
}