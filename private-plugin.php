<?php

/**
 * Plugin Name: Private Plugin
 */

if (!is_admin()) {
    echo '<h1>Hi from my private plugin<h1/>';
}