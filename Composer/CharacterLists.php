<?php



use ikoene\Marvel\Client;
use ikoene\Marvel\DataWrapper\CharacterDataWrapper;
use ikoene\Marvel\Entity\Character;
use ikoene\Marvel\Entity\CharacterList;
use ikoene\Marvel\DataContainer;




interface ICharacterList{

    public function getListCharacters();
    
}


class CharacterLists implements ICharacterList{


public $characters;

public function __construct($client){

    $this->characters = $client->getCharacters();

}

public function getListCharacters(){

    echo '<p>The Marvel archive has a total of ' . $this->characters->getData()->getTotal() . ' characters. ';
    echo 'This is a list of the first ' . $this->characters->getData()->getCount() . ' characters:</p>';
    echo '<p>';
    foreach ($this->characters->getData()->getResults() as $character) {
        echo $character->getName() . "<br>";
    }
    echo   '</p>';

}



}






?>