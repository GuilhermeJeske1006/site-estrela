<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function conteudo()
    {
        $tituloBanner = "Sobre-nós";
        return view('Conteudo.index', compact(
            'tituloBanner',
        ));

    }

    public function contato()
    {
        $tituloBanner = "Contato";
        return view('Contato.index', compact(
            'tituloBanner',
        ));
    }

    public function lista()
    {
        $tituloBanner = "Blogs";
        return view('Blog.index', compact(
            'tituloBanner',
        ));
    }
    public function ficha()
    {
        $tituloBanner = "efjwkjefwe";
        return view('Blog.ficha', compact(
            'tituloBanner',
        ));
    }
}
