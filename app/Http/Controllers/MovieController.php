<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all(); // Recupera tutti i film
        return view('movies.index', compact('movies')); // Ritorna la view con i dati
    }
}