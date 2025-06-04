<?php

namespace Connect\Dotenv;

class Env {
    function __construct()
    {
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
        $dotenv->load();
    }
}
