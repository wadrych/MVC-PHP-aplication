<?php

class ImageAddView
{
    private $message;

    public function __construct($message = "")
    {
        $this->message = $message;
    }

    public function render()
    {
        $message = $this->message;
        include '../layouts/add_image.php';
    }
}