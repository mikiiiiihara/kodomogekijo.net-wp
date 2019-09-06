<?php
// If uninstall is not called from WordPress, exit
if( !defined( 'ABSPATH' ) && !defined( 'WP_UNINSTALL_PLUGIN' ) )
    exit();
delete_option( 'cqs_options' );
?>
