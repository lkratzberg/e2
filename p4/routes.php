<?php

return [
    '/' => ['GameController', 'index'],
    '/index' => ['GameController', 'index'],
    '/round-history' => ['GameController', 'showHistory'],
    '/round-details' => ['GameController', 'showDetails'],
    '/play-game' => ['GameController', 'index'],
    '/play-game/round' => ['GameController', 'playRound'],
    '/practice' => ['AppController', 'dbConnection'],
];
