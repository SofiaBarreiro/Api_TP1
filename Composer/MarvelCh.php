<?php

use ikoene\Marvel\Client;
use ikoene\Marvel\Entity\Character;
use ikoene\Marvel\DataWrapper\CharacterDataWrapper;
use ikoene\Marvel\Entity\ComicSummary;
use ikoene\Marvel\Entity\CharacterFilter;

class Characters {


    public $name;
    public $description;
    public $type;

    public function __construct($name, $description, $type){

      $this->name = $name;
      $this->description = $description;
      $this->type = $type;
    }


}

?>
