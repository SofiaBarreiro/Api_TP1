<?php


use ikoene\Marvel\Entity\CharacterFilter;


class Heroes extends MarvelCh{


    
    public function __construct($name, $description, $type)    
    {  
        parent::__construct($name, $description, $type);

    }      

    function Save($cadena){


            $gestor = fopen('heroes.json', 'a+');
            echo $gestor;

            fwrite($gestor, $cadena . ",");


        

    }
    
    
}


?>