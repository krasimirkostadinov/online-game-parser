<div class="row clearfix" role="tabpanel">
    <ul class="nav nav-tabs animals-tab" role="tablist">
        <?php
            //show all tabs
            $counter = 1;
            foreach ($game_categories as $cat_name) {
                $active_class = ($counter == 1) ? 'class="active"' : null;
                echo '<li role="presentation" '.$active_class.'><a href="#tab-'.$counter.'" id="tab-to-'.$counter.'" aria-controls="tab-'.$counter.'" role="tab" data-toggle="tab" aria-expanded="true">'.$cat_name.'</a></li>';
                $counter++;
            }
        ?>
    </ul>
    <div class="tab-content">
        <?php
        //show all tab contents
        $counter_data = 1;
        foreach ($game_categories as $cat_name) {
            $active_class_data = ($counter_data == 1) ? ' in active' : null;
            echo '<div id="tab-'.$counter_data.'" role="tabpanel" class="tab-pane fade '.$active_class_data.'" aria-labelledby="tab-to-'.$counter_data.'">';
            require_once ROOT_PATH . '/problem3/views/tabs/tab-'.$counter_data.'.php';
            echo '</div>';
            $counter_data++;
        }
        ?>
    </div>
</div>
