<?php

use ikoene\Marvel\Client;

require __DIR__ . '/MarvelCh.php';
require __DIR__ . '/Heroes.php';
require __DIR__ . '/CharacterLists.php';
require __DIR__ . '/functionCharacter.php';
require __DIR__ . '/comics.php';


require_once dirname(__DIR__) . '/Composer/vendor/autoload.php';


$client = new Client('d6133b5fc7e74e066a6267a4cd88826b', '8d95dad8d71c28d4f58203e81aa6295b45c25d63');
print("<h2 style='text-align: center;'>Marvel's data base</h2>");


$request_Method = $_SERVER["REQUEST_METHOD"];
$path_info = $_SERVER["PATH_INFO"];


$filter = new functionsCh($client);


switch ($path_info) {

    case '/Heroe':


        if (isset($_GET['name'])) {
            $name = $_GET['name'];
            $response = $filter->setCharacterByFilter($name);
            $heroe = new Heroes($response->getName(), $response->getDescription(), "Heroe");
            echo $heroe->name;
            echo $heroe->description;
        }else{
            echo 'paso por aca';

            $name = $_POST['name'] ??null;
            $description = $_POST['description'] ?? null;
            $type = $_POST['type'] ?? null;


        if (isset($_POST['name']) && isset($_POST['description']) ){

            $heroe = new Heroes($name, $description, "Heroe");

            $cadena = json_encode($heroe);

            echo $cadena;

            $heroe->Save($cadena);


        }else{

            echo 'Method not allowed';
        }

    }
    break;
    case '/Comics':
        if (isset($_GET['name'])) {
        
            $name = $_GET['name'];
            $response = $filter->setCharacterByFilter($name);        
            $comicHeroe = new Comics($response);
            $comicHeroe->getStories();
        }else{

            echo 'Method not allowed';

        }
    break;
    case '/ListHeroes':
        if($request_Method == 'GET'){


        $characterList = new CharacterLists($client);
        $characterList->getListCharacters();

        }else{

            echo 'Method not allowed';

        }

        break;

    
}

