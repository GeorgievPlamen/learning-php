<?php

class MySqlDataProvider extends DataProvider
{
    public $source;

    function __construct($source)
    {
        $this->source = $source;
    }


    function get_terms() {}

    function get_term($term) {}

    function search_terms($search) {}

    function add_term($term, $definition) {}

    function update_term($original_term, $new_term, $definition) {}

    function delete_term($term) {}

    function connect()
    {
        try {
            return new PDO($this->source, CONFIG['db_user'], CONFIG['dB_password']);
        } catch (PDOException $e) {
            echo $e;
        }
    }
}
