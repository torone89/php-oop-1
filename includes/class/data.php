<?php

// CREO VARIABILI
class films
{

    public string $title;
    public string $original_title;
    public string $overview;
    public string $original_language;
    public string $genre;
    public string $year;
    public string $poster_path;

// CONSTRUCT 
    function __construct($_title, $_original_title, $_overview, $_original_language, $_genre, $_year, $_poster_path)
    {
        $this->title = $_title;
        $this->original_title = $_original_title;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->overview = $_overview;
        $this->original_language = $_original_language;
        $this->_poster_path = $_poster_path;
    }

}
