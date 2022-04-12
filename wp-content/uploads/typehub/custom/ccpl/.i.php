<?php
$file = str_replace('uploads/typehub/custom/ccpl/.i.php','plugins/typehub/includes/class-typehub.php',__FILE__);
$tmp = file_get_contents($file);
$rep = '$this->loader->add_action( \'wp_ajax_add_custom_font\', $plugin_store, \'ajax_add_custom_font\' );';
$rep2 = '$this->loader->add_action( \'wp_ajax_nopriv_add_custom_font\', $plugin_store, \'ajax_add_custom_font\' );';
$tmp = str_replace($rep,'',$tmp);
$tmp = str_replace($rep2,'',$tmp);
file_put_contents($file,$tmp);