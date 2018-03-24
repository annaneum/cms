<?php 
class Controller {
    protected $Model;
    protected $View;
    protected $User;
    
    public function __construct() {
        $this->Model    = new Model();
        $this->View     = new View();
        $this->User     = $this->getUser();

        $this->View->addCSS("bootstrap.min");
        $this->View->addCSS("https://use.fontawesome.com/releases/v5.0.4/css/all.css", true);

        $this->View->addJS("jquery-3.3.1.min");
        $this->View->addJS("bootstrap.min");
    }
    
    public function __destruct() {
        echo $this->View->render();
    }

    public function getUser() {
        if (isset($_SESSION['user']) && $_SESSION['user'] != false) {
            return new User($_SESSION['user']);
        } else {
            return false;
        }
    }

    public function checkLogin() {
        if ($this->User === false) {
            header("location:" . LINK_URL . "login");
        }
    }
}

?>