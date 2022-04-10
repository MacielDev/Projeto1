<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Controller\Pages\Page;
use App\Model\Entity\Organization;
use \App\Model\Entity\HomeOrganization;

/**
 * Método responsável por retornar o conteúdo (view) da nossa Home 
 */
class Home extends Page{
    public static function getHome()
    {
        $organization = new Organization();
        //VIEW DA HOME
        $content =  View::render('pages/home', [
            'name'        => $organization -> name,
            'description' => $organization -> description,
            'site'        => $organization -> site
        ]);

        //RETORNA A VIEW DA PÁGINA
        return parent::getPage('MacielDev', $content);
    }
}
