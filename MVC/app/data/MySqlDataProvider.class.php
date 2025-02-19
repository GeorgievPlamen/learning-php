<?php

class MySqlDataProvider extends DataProvider
{
    public $source;

    function __construct($source)
    {
        $this->source = $source;
    }


    function get_terms()
    {
        $db = $this->connect();

        if ($db == null) {
            return [];
        }

        $query = $db->query('SELECT id, term, definition FROM terms');

        $data = $query->fetchAll(PDO::FETCH_CLASS, 'GlossaryTerms');

        $db = null;

        return $data;
    }

    function get_term($term)
    {
        $db = $this->connect();

        if ($db == null) {
            return;
        }

        $sql = 'SELECT * FROM terms WHERE id = :id';
        $smt = $db->prepare($sql);

        $smt->execute([
            ':id' => $term,
        ]);

        $data = $smt->fetchAll(PDO::FETCH_CLASS, 'GlossaryTerms');

        if (empty($data)) {
            $smt = null;
            $db = null;
            return;
        }

        $smt = null;
        $db = null;

        return $data[0];
    }

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
