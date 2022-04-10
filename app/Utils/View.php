<?php

namespace App\Utils;

class View{
    /**
     * Métodos reponsáveis por retornar o conteúdo de nossas Views
     * @param string $view
     * @return string
     */
    private static function getContentView(string $view):string
    {
        $file = __DIR__.'/../../resources/view/'.$view.'.html';
        return file_exists($file) ? file_get_contents($file): '';
    }
    
    /**
     * @param string $views
     * @return string
     */

     public static function render(string $view):string
     {
         //Conteudoo da View 
         $contentView = self::getContentView($view);

         //RETORNA O CONTEÚDO DA VIEW
         return $contentView;
     }

}