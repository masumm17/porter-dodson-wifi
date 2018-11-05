<?php
/**
 * Entry of the App
 */

define( 'ABSPATH', dirname( __FILE__ ) . '/' );

require_once ABSPATH . 'inc/pd-config.php';
require_once ABSPATH . 'inc/class-pdwife.php';

new PD_WiFi();