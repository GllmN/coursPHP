<?php

require_once './Pokemon.php';
require_once './PokemonDAO.php';


    $pikachu = new Pokemon(1, "Pikachu");
    $pikachuDAO = new PokemonDAO();
    $pikachuDAO->insert($pikachu);

