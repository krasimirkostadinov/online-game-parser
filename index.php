<?php
require_once './config.php';

//Autoload all classes by PSR-4 specification
require_once __DIR__ . '/problem3/vendor/autoload.php';

$json_file = \problem3\models\JsonParser::parseJson(HOST_PATH . "/problem3/games.json");
$data = \problem3\models\JsonParser::jsonDecode($json_file, TRUE);
$game_categories = [];
$games = [];

if($data){
    //create global array with Game objects, so can use getter/setters with logic inside in views
    foreach($data as $category => $values) {
        $game_categories[$category] = ucfirst($category) . ' Games';
        foreach ($data[$category] as $single_game => $game_value) {
            $games[$category][$single_game] = new \problem3\models\Game($game_value, $category);
        }
    }
}

require_once ROOT_PATH . '/problem3/views/layouts/header.php';
?>
    <div class="container-fluid main-container">
        <div class="row clearfix">
            <div class="container">
                <h1>Games overview</h1>
                <?php
                //----------- Include site layout ----------
                require_once ROOT_PATH . '/problem3/views/layouts/site-layout.php';
                ?>
            </div>
        </div>
    </div>
<?php
require_once ROOT_PATH . '/problem3/views/layouts/footer.php';
?>