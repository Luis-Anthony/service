<?php 
global $wpdb;

define( 'SERVICE_VERSION',  '1.0.0'  );

$service_path = ( substr( get_template_directory(),     -1 ) === '/' ) ? get_template_directory()     : get_template_directory()     . '/';
$service_uri  = ( substr( get_template_directory_uri(), -1 ) === '/' ) ? get_template_directory_uri() : get_template_directory_uri() . '/';

define( 'SERVICE_DIR_PATH', $service_path );
define( 'SERVICE_DIR_URI',  $service_uri  );

require_once SERVICE_DIR_PATH . 'includes/class-service-master.php';

function run_service_master() {
    $service_master = new SERVICE_Master;
    $service_master->run();
}

run_service_master();
?>