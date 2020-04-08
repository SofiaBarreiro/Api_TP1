<?php


use ikoene\Marvel\Client;
use ikoene\Marvel\Entity\Character;
use ikoene\Marvel\DataWrapper\CharacterDataWrapper;
use ikoene\Marvel\Entity\ComicSummary;
use ikoene\Marvel\Entity\CharacterFilter;


class Heroes extends Characters{


    
    public function __construct($name, $description, $type)    
    {  
        parent::__construct($name, $description, $type);

    }      

    public static function getStories($name, $client){

        $characterFilter = new CharacterFilter();
        $characterFilter->setName($name);
        $response = $client->getCharacters($characterFilter);
        $character = $response->getData()->get(0);

        echo '<p>First ' . $character->getComics()->getReturned() . ' comics  of' . $name .'</p>';
        echo '<p>'; 
        foreach ($character->getComics()->getItems() as $comic) {
            echo $comic->getName() . '<br>';
        }
        echo "</p>"; 

    }


    public function getDataCharacter(){

        echo '--------------------------------------';
        echo '<p>Name: ' . $this->name . '</p>';
        if($this->description == ""){
            
        echo '<p>Descripcion: ' . 'No data' .'</p>'; 
                    
        }else{
        echo '<p>Descripcion: ' . $this->description .'</p>'; 
        }
        echo '<p>Type: ' . $this->type . '</p>'; 
        echo '--------------------------------------';


    }

   
}


?>