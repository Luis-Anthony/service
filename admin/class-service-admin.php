<?php 
class SERVICE_Admin {
    private $theme_name;
    private $build_menupage;
    
    public function __construct( $theme_name ) {
        $this->theme_name     = $theme_name;
        $this->build_menupage = new SERVICE_Build_Menupage();
    }
    
    public function enqueue_styles( $hook ) {
        
    }
    public function enqueue_scripts( $hook ) {
        
    }
}
?>