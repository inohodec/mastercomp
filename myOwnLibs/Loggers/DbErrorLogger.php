<?php

namespace Ostepan\Lib\Loggers;

class DbErrorLogger extends AbstractLogger
{
    public function writeDataToFile(string $data)
    {
        file_put_contents(
            $this->getRootFolder() . "/logs/db_error.log", 
            date("d-m-Y H:i:s") . " => " . $data . PHP_EOL,
            FILE_APPEND | LOCK_EX
        );    
    }
}