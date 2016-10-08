<?php
function choice($args) {
    $choices = explode(' ', $args);
    return $choices[array_rand($choices)];
}
