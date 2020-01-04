<?php

require_once "../views/StaticViews.php";

class StaticController
{
    public function main()
    {
        return new MainView();
    }

    public function exercises()
    {
        return new ExercisesView();
    }

    public function contact()
    {
        return new ContactView();
    }
}