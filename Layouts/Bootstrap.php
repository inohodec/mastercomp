<?php

namespace Template;

class Bootstrap 
{
    protected static $bootstrap = 
        '<meta charset="UTF-8">' . PHP_EOL .
        '<meta http-equiv="X-UA-Compatible" content="IE=edge">' . PHP_EOL .
        '<meta name="viewport" content="width=device-width, initial-scale=1.0">' . PHP_EOL .
        '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">' . PHP_EOL .
        '<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>' . PHP_EOL .
        '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>' . PHP_EOL .
        '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>' . PHP_EOL .
        '<link href="/css/my.css">' . PHP_EOL;

    

    /**
     * Get the value of bootstrap
     */
    public static function render()
    {
        echo self::$bootstrap;
    }
}
