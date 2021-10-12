<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /* Sorvetes categoria 1*/
    public function sorvetesView()
    {
        $sorvetes = Produto::where(['produto_categoria'=>1])->get();
        return inertia('Gerenciar-Sorvete',
            ['sorvetes' => $sorvetes]
        );
    }
    /* Acai categoria 2*/
    public function acaiView()
    {
        $sorvetes = Produto::where(['produto_categoria'=>2])->get();
        return inertia('Gerenciar-Acai',
            ['acai' => $sorvetes]
        );
    }
    /* Lanches categoria 3*/
    public function lancheView()
    {
        $sorvetes = Produto::where(['produto_categoria'=>3])->get();
        return inertia('Gerenciar-Lanche',
            ['sorvetes' => $sorvetes]
        );
    }
}