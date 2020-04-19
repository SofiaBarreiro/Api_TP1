<?php

use ikoene\Marvel\Entity\Character;
use ikoene\Marvel\DataContainer;
use ikoene\Marvel\Entity\Comic;
use ikoene\Marvel\Entity\ComicList;
use ikoene\Marvel\DataWrapper\ComicDataWrapper;

class Comics{

    public $character;

     
    public function __construct($character)    
    {  
        $this->character = $character;

    }      


    public function getStories(){

       
        echo '<p>First ' . $this->character->getComics()->getReturned() . ' comics  of ' . $this->character->getName() .'</p>';
        echo '<p>'; 
        foreach ($this->character->getComics()->getItems() as $comic) {
            echo $comic->getName() . '<br>';
        }
        echo "</p>"; 

    }




}

?>