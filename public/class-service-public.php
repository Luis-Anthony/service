<?php 
class SERVICE_Public {
    private $theme_name;

    public function __construct( $theme_name ) {
        $this->theme_name = $theme_name;
    }

    public function enqueue_styles() {
        wp_enqueue_style( 'service_style_css', SERVICE_DIR_URI . 'public/css/service_style.css', array(), filemtime(SERVICE_DIR_PATH . 'public/css/service_style.css'), 'all' );
    }
    
    public function enqueue_scripts() {
        wp_enqueue_script( 'service_script_js', SERVICE_DIR_URI . 'public/js/service_script.js', [], filemtime(SERVICE_DIR_PATH . 'public/js/service_script.js'), true );
    }
}
?>