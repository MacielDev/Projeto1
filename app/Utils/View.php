<?php

namespace App\Utils;

class View
{
    /**
     * Métodos reponsáveis por retornar o conteúdo de nossas Views
     * @param string $view
     * @return string
     */
    private static function getContentView(string $view): string
    {
        $file = __DIR__ . '/../../resources/view/' . $view . '.html';
        return file_exists($file) ? file_get_contents($file) : '';
    }

    /**
     * @param string $views
     * @param array $vars (string/numeric)
     * @return string
     */

    public static function render(string $view, $vars = []): string
    {
        //Conteudoo da View 
        $contentView = self::getContentView($view);

        //DESCOBRINDO O NOME DAS VARIAVEIS : AS CHAVES (Keys)
        $keys = array_keys($vars);
        $keys = array_map(function($item){
            return '{{'.$item.'}}';
        },$keys);
     
        return str_replace($keys,array_values($vars),$contentView); 
    } 
}
