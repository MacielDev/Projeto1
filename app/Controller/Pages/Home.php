<?php

namespace App\Controller\Pages;
use \App\Utils\View;

/**
 * Método responsável por retornar o conteúdo (view) da nossa Home 
 */
class Home{
    public static function getHome(){
        return View::render('pages/home');

    }
}

?>