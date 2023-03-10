<?php

/**
 * Plugin Name: Private Plugin
 */

if (!is_admin()) {
    echo '<p>Hi from my private plugin<p/>';
}