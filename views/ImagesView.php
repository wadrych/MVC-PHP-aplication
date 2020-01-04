<?php
require_once '../models/Image.php';

class ImagesView
{
    private $index;
    private $images;
    private $fav;

    public function __construct($index, $images, $fav)
    {
        $this->index = $index; 
        $this->images = $images;
        $this->fav = $fav;
    }

    public function render()
    {
        $index = $this->index;
        $images = $this->images;
        $fav = $this->fav;

        include '../layouts/images.php';
    }
}