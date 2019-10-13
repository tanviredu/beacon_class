<?php

interface db_adapter{
    public function open_connection();
    public function close_connection();
    public function confirm_query();
    public function query();
    public function fetch_array();
}

class Database{
    protected $adapter;
    function __construct(db_adapter $adapter){
        $this->adapter = $adapter;

    }
    public function open_connection(){}
    public function close_connection(){}
    public function confirm_query(){}
    public function query(){}
    public function fetch_array(){}

}


?>