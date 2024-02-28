<?php

class Controller
{
    public function views($name)
    {
        if (file_exists('../App/views/' .$name . '.php'))
        {
            require '../App/views/' .$name . '.php';
        }
        else
        {
            require '../App/views/404.php';
        }
        

    }
}