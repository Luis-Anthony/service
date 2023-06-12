<?php 
class SERVICE_Master {
    protected $charger;
    protected $theme_name;
    public function __construct() {
        $this->theme_name = 'SERVICE';
        $this->load_dependencies();
        $this->load_instances();
        $this->define_admin_hooks();
        $this->define_public_hooks();
    }
    private function load_dependencies() {

        require_once SERVICE_DIR_PATH . 'includes/class-service-charger.php';        
        require_once SERVICE_DIR_PATH . 'includes/class-service-build-menupage.php';
        require_once SERVICE_DIR_PATH . 'includes/class-service-support.php';
        require_once SERVICE_DIR_PATH . 'admin/class-service-admin.php';
        require_once SERVICE_DIR_PATH . 'public/class-service-public.php';
       
    }
    private function load_instances() {
        $this->charger = new SERVICE_Charger;
        $this->service_admin  = new SERVICE_Admin( $this->get_theme_name() );
        $this->service_public = new SERVICE_Public( $this->get_theme_name() );
        $this->service_support = new SERVICE_Theme_Support;
    }
    private function define_admin_hooks() {
        $this->charger->add_action( 'admin_enqueue_scripts', $this->service_admin, 'enqueue_styles' );
        $this->charger->add_action( 'admin_enqueue_scripts', $this->service_admin, 'enqueue_scripts' );
        $this->charger->add_action( 'wp_enqueue_scripts', $this->service_support, 'remove_gutemberg' );
        $this->charger->add_action( 'init', $this->service_support, 'add_support' );
        $this->charger->add_action( 'init', $this->service_support, 'remove_elements_wordpress' );
    }
    private function define_public_hooks() {
        $this->charger->add_action( 'wp_enqueue_scripts', $this->service_public, 'enqueue_styles' );
        $this->charger->add_action( 'wp_footer', $this->service_public, 'enqueue_scripts' );
    }
    public function run() {
        $this->charger->run();
    }
    public function get_theme_name() {
        return $this->theme_name;
    }
    public function get_charger() {
        return $this->charger;
    }
}
?>