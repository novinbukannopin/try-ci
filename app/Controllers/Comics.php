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
        $data = [
            'title' => "List Comic ",
            'film' => $this->modelFilm->getFilm()
        ];

        // $db = \Config\Database::connect();
        // $film = $db->query("SELECT * FROM film");
        // foreach ($film->getResultArray() as $row) {
        //     d($row); 
        // }


        return view('comic/index', $data);
    }
    public function detail($slug)
    {
        $data = [
            'title' => "Detail Film",
            'film' => $this->modelFilm->getFilm($slug)
        ];
        if (empty($data['film'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul Film ' . $slug . ', tidak ada');
        }
        return view('comic/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Add Film'
        ];

        return view("comic/create", $data);
    }

    public function save()
    {
        $slug = url_title($this->request->getVar('title'), '-', true);
        $this->modelFilm->save([
            'title' => $this->request->getVar('title'),
            'slug' => $slug,
            'producer' => $this->request->getVar('producer'),
            'studio' => $this->request->getVar('studio'),
            'picture' => $this->request->getVar('picture'),
        ]);

        return redirect()->to('/comics');
    }
}
