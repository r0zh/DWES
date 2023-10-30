<?php
function estrellas($rating)
{
    $total_stars = 5;
    while ($rating > 1) {
        echo '<img src="./assets/star.png" width="18px">';
        $rating--;
        $total_stars--;
    }
    if ($rating > 0.5) {
        echo '<img src="./assets/halfstar.png" width="18px">';
        $total_stars--;
    }
    for ($i = 0; $i < $total_stars; $i++) {
        echo '<img src="./assets/emptystar.png" width="18px">';
    }
}
?>