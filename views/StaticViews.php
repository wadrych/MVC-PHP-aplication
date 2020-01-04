<?php

class MainView
{
    public function render()
    {
        include "../layouts/index.php";
    }
}

class ExercisesView
{
    public function render()
    {
        include "../layouts/exercises.php";
    }
}

class ContactView
{
    public function render()
    {
        include "../layouts/contact.php";
    }
}