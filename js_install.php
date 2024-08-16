<?php
/*
Plugin Name: js install
Description: A simple WordPress plugin that adds a test.js file to the index.html of installed theme.
Version: 1.0
Author: hiroshijp
*/

// プラグインがアクティブ化されたときにフックを設定
add_action('wp_enqueue_scripts', 'js_install');

function js_install() {
    if (is_front_page()) { // トップページ（index.html）でのみスクリプトを読み込む
        wp_enqueue_script('test-js', plugin_dir_url(__FILE__) . 'test.js', array(), null, true);
        add_action('wp_head', 'add_module_from_cdn');
    }
}

function add_module_from_cdn() {
    // CDNからモジュール形式でJavaScriptを読み込む
    ?>
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.5.0/model-viewer.min.js"></script>
    <?php
}

