<?php 
class Index extends Controller {
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->View->setTemplate("index");
        $this->View->setTitle("KRK CRM");
        $content = $this->View->fillTemplate("main", array());
        $this->View->setContent($content);


    }
}

?>