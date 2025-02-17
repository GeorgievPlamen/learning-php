<?php

require_once('GlossaryTerms.class.php');

class DataProvider
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
}
