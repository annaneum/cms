<?php
class Model extends MysqliDb{
    private $conn_centron;
    
    function __construct() {
        parent::__construct(DB_HOST, DB_USER, DB_PASS, DB);
    }
}

?>