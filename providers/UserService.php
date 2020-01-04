<?php
require_once '../Db.php';

class UserService
{
    public static function save($user)
    {
        $dir = DB::get()->users->insertOne($user);

        return $dir->getInsertedId();
    }

    public static function do_exist($login)
    {

        $query = [
            'login' => "{$login}"
        ];

        $user = DB::get()->users->findOne($query);

        if(isset($user))
        {
            return true;
        }
        else 
        {
            return false;
        }
    }

    public static function search($login)
    {
        // $query = [
        //     'login' => "{$login}"
        // ];
        // $response = DB::get()->users->find($query);
        // $images = [];
        // foreach ($response as $image)
        // {
        //     echo $image['login'];
        //         DB::get()->users->deleteOne([
        //             'login'=> 'wojtek'
        //         ]);
        // }
        // return $images;

        $query = [
            'login' => "{$login}"
        ];

        $user = DB::get()->users->findOne($query);

        return $user;
    }
}