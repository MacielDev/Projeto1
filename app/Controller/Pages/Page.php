<?php

namespace App\Controller\Pages;

use \App\Utils\View;

/**
 * Método responsável por retornar o conteúdo (view) da nossa página genérica 
 */
class Page
{
    /**
     * Método responsável podor renderizar o topo da página   
     * @return string
     */
    private static function getHeader()
    {
        return View::render('pages/header');
    }

    /**
     *Método responsável por renderizar o roda-pé de nossas páginas
     */
    private static function getFooter()
    {
        return View::render('pages/footer');
    }


    /**
     * Método responsável por retornar o conteúdo (view) de nossa página genérica
     * @return $string
     */
    public static function getPage($title, $content)
    {
        return View::render('pages/page', [
            'title'  => $title,
            'header' => self::getHeader(),
            'content' => $content,
            'footer' => self::getFooter()
        ]);
    }
}
