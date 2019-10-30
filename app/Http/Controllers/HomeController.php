<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
        $noticias = [
 ['Noticia' => 'Noticia N°1'],
 ['Noticia' => 'Noticia N°2'],
 ['Noticia' => 'Noticia N°3'],
 ['Noticia' => 'Noticia N°4'],
 ['Noticia' => 'Noticia N°5']
 
];

 return view('home',compact('noticias'));
    }
}
