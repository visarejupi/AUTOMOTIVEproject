<?php

include "auth.php";

class site {
    private $db_conn;
    private $page;
    private $header;
    private $footer;
    public $privileges;
    public $user; 

    public function __construct($db_conn, $header, $footer) {
        $this->db_conn = $db_conn;
        $authorization = new auth($db_conn);
        $this->privileges = $authorization->privileges;
        $this->user = $authorization->user;
        $this->header = $header;
        $this->footer = $footer;
    }

    public function setPage($page) {
        $this->page = $page;
    }

    public function render() {
        include $this->header;
        $this->page->render();
        if ($this->footer != "") include $this->footer;
    }

    public function __destruct() {
        $db_conn = null;
    }
}

?>