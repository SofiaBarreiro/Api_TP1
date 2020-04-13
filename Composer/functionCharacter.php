<?php

use ikoene\Marvel\Entity\CharacterFilter;


class functionsCh
{


    public $client;

    public function __construct($client)
    {

        $this->client = $client;
    }


    public function setCharacterByFilter($name)
    {

        $characterFilter = new CharacterFilter();

        $characterFilter->setName($name);
        $response = $this->client->getCharacters($characterFilter);
        $character = $response->getData()->get(0);
        return $character = $response->getData()->get(0);

        
    }




}
