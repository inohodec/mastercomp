<?php

namespace Ostepan\Lib\Loggers;

class DbErrorLogger extends AbstractLogger
{
    protected function setFilePath(): string
    {
        return "/logs/db_error.log";
    }     
}