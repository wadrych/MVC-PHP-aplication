<?php
require_once '../Db.php';

class ImageService
{
    public static function get_images($page)
    {
        $page_size = 6;
        $opts = [
            'skip' => ($page - 1) * $page_size,
            'limit' => $page_size
        ];

        $response = DB::get()->images->find([], $opts);
        $images = [];
        foreach ($response as $image)
        {
            $images[] = new Image($image['name'], $image['author'], $image['format'], $image['_id']);
        }

        return $images;
    }

    public static function save_image($image)
    {
        $dir = DB::get()->images->insertOne($image);

        return $dir->getInsertedId();
    }

    public static function delete_image($_id)
    {
        $str = trim($_id);
        if($str != '')
        {
            $query = [
                '_id' => new MongoDB\BSON\ObjectId("{$str}")
            ];
    
            $response = DB::get()->images->deleteOne($query);
    
            return $response;
        }
        return false;
    }

    public static function get_image($_id)
    {
        
        $str = trim($_id);
        if($str != '')
        {
            $query = [
                '_id' => new MongoDB\BSON\ObjectId("{$str}")
            ];
    
            $response = DB::get()->images->findOne($query);
    
            return $response;
        }
        return false;
    }
}