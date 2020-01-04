<?php
require_once '../models/Image.php';

class FavouritesView
{
    private $images;

    public function __construct($images)
    {
        $this->images = $images;
    }

    public function render()
    {
        $images = $this->images;

        include "../layouts/favourites.php";
    }
}