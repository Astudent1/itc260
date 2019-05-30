<?php
//application/views/pics/view.php

?>
  
<h2>Pics with Tag: <?php echo $title; ?></h2>

<?php
    if (isset($pics)) {

        echo '<div class="row">';

        foreach ($pics as $pic) {
        //pic size
        $size = 'm';

        //create url to load pic
        $photo_url = 'https://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';

        echo '
            <img src="' . $photo_url . '" />
        ';
        }

        echo '</div><!-- .row -->';
    }

?>

