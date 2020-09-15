<?php


namespace App\Controllers;


class Controller
{
    public function page1(){
        $title = "page 1";
        include(__DIR__ . '/../../views/page.php');
    }
    public function page2(){
        $title = "page 2";
        include(__DIR__ . '/../../views/page.php');
    }
}