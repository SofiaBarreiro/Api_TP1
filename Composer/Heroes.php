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

        echo '<p><strong>First ' . $character->getComics()->getReturned() . ' comics: </strong></p>';
        foreach ($character->getComics()->getItems() as $comic) {
            echo '<p>' . $comic->getName() . '<p>';
        }
    }


    public function getDataCharacter(){

        echo '--------------------------------------';
        echo '<p><strong>Name</strong>: ' . $this->name . '</p>';
        if($this->description == ""){
            
        echo '<p><strong>Descripcion</strong>: ' . 'No data' .'</p>'; 
                    
        }else{
        echo '<p><strong>Descripcion</strong>: ' . $this->description .'</p>'; 
        }
        echo '<p><strong>Type</strong>: ' . $this->type . '</p>'; 
        echo '--------------------------------------';


    }

   
}


?>