<?php

class DB{

    public $con;
    protected $servername = "localhost:8111";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "users";

    function __construct(){
        $this->con = mysqli_connect($this->servername, $this->username, $this->password);
        mysqli_select_db($this->con, $this->dbname);
        mysqli_query($this->con, "SET NAMES 'utf8'");
    }

}