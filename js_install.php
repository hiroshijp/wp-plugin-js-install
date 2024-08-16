<?php
/*
Plugin Name: js install
Description: A simple WordPress plugin that adds a test.js file to the index.html of installed theme.
Version: 1.0
Author: hiroshijp
*/

// プラグインがアクティブ化されたときにフックを設定
add_action('wp_enqueue_scripts', 'my_simple_plugin_enqueue_scripts');

function my_simple_plugin_enqueue_scripts() {
    if (is_front_page()) { // トップページ（index.html）でのみスクリプトを読み込む
        wp_enqueue_script('my-simple-plugin-script', plugin_dir_url(__FILE__) . 'test.js', array(), null, true);
    }
}
