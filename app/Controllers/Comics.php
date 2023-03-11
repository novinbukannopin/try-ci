<?php

namespace App\Controllers;

use App\Models\FilmModel;

class Comics extends BaseController
{
    protected $modelFilm;
    public function __construct()
    {
        $this->modelFilm = new FilmModel();
    }
    public function index()
    {
        $film = $this->modelFilm->findAll();
        $data = [
            'title' => "List Comic ",
            'film' => $film
        ];

        // $db = \Config\Database::connect();
        // $film = $db->query("SELECT * FROM film");
        // foreach ($film->getResultArray() as $row) {
        //     d($row); 
        // }


        return view('comic/index', $data);
    }
}
