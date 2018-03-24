<?php 
class Controller {
    protected $Model;
    protected $View;
    
    public function __construct() {
        $this->Model    = new Model();
        $this->View     = new View();
        
        $this->View->addCSS("bootstrap.min");
        $this->View->addCSS("https://use.fontawesome.com/releases/v5.0.4/css/all.css", true);

        $this->View->addJS("jquery-3.3.1.min");
        $this->View->addJS("bootstrap.min");


    }
    
    public function __destruct() {
        echo $this->View->render();
    }
}

?>