<?php


require_once dirname(__DIR__) . '/Composer/vendor/autoload.php';
require __DIR__. '/MarvelCh.php';
require __DIR__ . '/Heroes.php';
require __DIR__ . '/CharacterLists.php';



use ikoene\Marvel\Client;
use ikoene\Marvel\Entity\CharacterList;
use ikoene\Marvel\Entity\ComicSummary;
use ikoene\Marvel\Entity\CharacterFilter;
use ikoene\Marvel\DataContainer;



$client = new Client('d6133b5fc7e74e066a6267a4cd88826b', '8d95dad8d71c28d4f58203e81aa6295b45c25d63');
print ("<h2 style='text-align: center;'>Marvel's data base</h2>"); 



$characterList = new CharacterLists($client);
$characterList->getListCharacters();




$characterFilter = new CharacterFilter();

$characterFilter->setName('Iron man');
$response = $client->getCharacters($characterFilter);
$character = $response->getData()->get(0);
$captainMarvel = new Heroes($character->getName(),$character->getDescription(), "Heroe");
$captainMarvel->getDataCharacter();


$characterFilter->setName('Wasp');
$response = $client->getCharacters($characterFilter);
$character = $response->getData()->get(0);
$captainMarvel = new Heroes($character->getName(),$character->getDescription(), "Heroe");
$captainMarvel->getDataCharacter();


$characterFilter->setName('Spider-Man');
$response = $client->getCharacters($characterFilter);
$character = $response->getData()->get(0);
$captainMarvel = new Heroes($character->getName(),$character->getDescription(), "Heroe");
$captainMarvel->getDataCharacter();


$characterFilter->setName('Thor');
$response = $client->getCharacters($characterFilter);
$character = $response->getData()->get(0);
$captainMarvel = new Heroes($character->getName(),$character->getDescription(), "Heroe");
$captainMarvel->getDataCharacter();


$characterFilter->setName('Hulk');
$response = $client->getCharacters($characterFilter);
$character = $response->getData()->get(0);
$captainMarvel = new Heroes($character->getName(),$character->getDescription(), "Heroe");
$captainMarvel->getDataCharacter();

Heroes::getStories('Spider-man', $client);