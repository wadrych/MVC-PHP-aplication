<?php

class MainView
{
    public function render()
    {
        include "../layouts/index.html";
    }
}

class ExercisesView
{
    public function render()
    {
        include "../layouts/exercises.html";
    }
}

class ContactView
{
    public function render()
    {
        include "../layouts/contact.html";
    }
}