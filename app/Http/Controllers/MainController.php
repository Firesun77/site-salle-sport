<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function AccueilController() 
    {
        return view('accueil');
    }

    function CoursController() 
    {
        return view('cours');
    }

    function TarifController() 
    {
        return view('tarif');
    }

    function ContactController() 
    {
        return view('contact');
    }

    function MentionsLegalesController() 
    {
        return view('mentions-legales');
    }

}
