<?php

// function custom_maintenance_mode() {
//   if (!current_user_can('edit_themes') || !is_user_logged_in()) {
//       wp_die('<h1>メンテナンス中</h1><p>現在、サイトはリニューアル作業中です。</p>');
//   }
// }
// add_action('get_header', 'custom_maintenance_mode');


function src($filename=null) {
  echo get_template_directory_uri().'/'.$filename;
}