<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\Cache;


class ProdutosController extends Controller
{
    function index(){

        $expire = 1; // minutos
        $produtos =  Cache::remember('todososprodutos', $expire, function(){
            return Produto::with('categorias')->get();
        });

        return view('produtos', compact('produtos'));

        // $prod = Produto::all();
        // dd($prod);
        //dd("Hello!");
    }
}
