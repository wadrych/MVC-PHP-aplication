<?php
require_once '../providers/ImageService.php';

class Image
{
    public $name;
    public $author;
    public $format;
    public $id;

    public function __construct($name, $author, $format, $id = NULL)
    {
        $this->name = $name;
        $this->author = $author;
        $this->id = $id;
        $this->format = $format;
    }
    
    public function get_id()
    {
        return $this->id;
    }

    public function save_image()
    {
        $record = [
            'name' => "{$this->name}",
            'author' => "{$this->author}",
            'format' => "{$this->format}"
        ];

        $this->id = ImageService::save_image($record);
    }
}