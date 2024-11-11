<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilmController extends Controller
{
    public $films;

    function __construct()
    {
        $this->films = Storage::json('filmek_2.json');
        // dd($this->films);
    }

    public function index()
    {
        return view('films', ['films' => $this->films]);
    }

    public function show($id)
    {
        foreach ($this->films as $film) {
            if ($film['id'] == $id) {
                return view('film', ['film' => $film]);
            }
        }
        return abort(404);
    }

    public function directors()
    {
        $directors = [];
        foreach ($this->films as $film) {
            $d = explode(',', $film['Rendezo']);
            foreach ($d as $item) {
                if (!in_array($item, $directors)) {
                    $directors[] = $item;
                }
            }
        }

        sort($directors);

        return view('directors', ['directors' => $directors]);
    }

    public function filmsOfDirector($director) {
        $films = [];
        foreach ($this->films as $film) {
            if (str_contains($film['Rendezo'], $director)) {
                $films[] = $film;
            }
        }

        return view('films', ['films' => $films]);
    }

    public function searchByTitle(Request $request) {
        $films = [];
        foreach ($this->films as $film) {
            if (str_contains(strtolower($film['Cim_en']), strtolower($request->title))) {
                $films[] = $film;
            }
        }

        $request->flash();

        return view('films', ['films' => $films]);
    }
}
