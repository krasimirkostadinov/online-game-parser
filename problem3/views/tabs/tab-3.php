<?php
$tab_games = $games['card'];

$tab_html = '';
foreach ($tab_games as $single_game) {
    $tab_html .= '<div class="game-container col-md-3 col-sm-4 " data-game-name="'.$single_game->getGameName().'" data-id="'.$single_game->getGameId().'" data-game-code="'.$single_game->getGameCode().'" data-machine-id="'.$single_game->getMachineId().'" data-denominations="'.$single_game->getDenominations().'" data-hands="'.$single_game->getHands().'" >';
    $tab_html .= '<h3>'.$single_game->getGameName().'</h3>';
    $tab_html .= '<div class="thumbnail">';
    $tab_html .= '<img src="'.$single_game->getPictureUrl().'" alt="'.$single_game->getGameName().'" />';
    $tab_html .= '<span class="hover"></span>';
    $tab_html .= '</div></div>';
}

echo $tab_html;
?>