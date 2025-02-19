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

    function add_term($term, $definition)
    {
        $db = $this->connect();

        if ($db == null) {
            return;
        }

        $sql = 'INSERT INTO terms (term, definition) VALUES (:term, :definition)';
        $smt = $db->prepare($sql);

        $smt->execute([
            ':term' => $term,
            ':definition' => $definition
        ]);

        $smt = null;
        $db = null;
    }

    function update_term($original_term, $new_term, $definition) {}

    function delete_term($term) {}

    private function connect()
    {
        try {
            return new PDO(CONFIG['db'], CONFIG['db_user'], CONFIG['db_password']);
        } catch (PDOException $e) {
            echo $e;
        }
    }
}
