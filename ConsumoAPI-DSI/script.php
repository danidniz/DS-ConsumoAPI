<?php

error_reporting(0);


$pegarJSON = file_get_contents('https://www.canalti.com.br/api/pokemons.json');
$JSONparaArray = json_decode($pegarJSON, true);

if (isset($_POST['nome']) && !empty($_POST['nome'])) {
    $nomePokemon = ucfirst(mb_strtolower($_POST['nome']));
    foreach ($JSONparaArray as $pokemon) {
        for ($i = 0; $i < 160; $i++) {
          if (array_search($nomePokemon, $pokemon[$i])) {
              if ($pokemon[$i]['name'] == $nomePokemon) {
                  $pokemonAchado = $pokemon[$i];
              }elseif(is_null($pokemonAchado)){
                  $pokemonAchado['name'] = "Pokemon ".$nomePokemon." não encontrado, ou não existe.";
                }
            }
        }
    }
} else {
    $pokemonAchado['name'] = "Digite o nome de um Pokemon para ver seu tipo e quais são suas fraquezas!";
}