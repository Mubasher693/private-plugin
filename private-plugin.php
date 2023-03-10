<?php

/**
 * Plugin Name: private-plugin
 * Plugin URI: https://www.your-site.com/
 * Description: Demonstration for, How we can install private plugin in bedrock..
 * Version: 0.1
 * Author: Mubasher iqbal
 * Author URI: https://github.com/Mubasher693
 **/

if (!is_admin()) {
    echo '<p>Hi from my private plugin<p/>';
}