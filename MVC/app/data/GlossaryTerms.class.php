<?php

class GlossaryTerms
{
    public $term;
    public $definition;

    function __construct($term, $definition)
    {
        $this->term = $term;
        $this->definition = $definition;
    }
}
