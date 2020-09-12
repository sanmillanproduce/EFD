<?php

namespace App\Http\Controllers\Principal;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Classification;
use App\Subclassification;
use App\Subarea;
use App\Kit;
use App\Product;
use App\Name;

class MenuIzqController extends Controller
{
    public function menu()
    {
        $men = Classification::orderBy('id', 'ASC');
        $menuuno = Subclassification::orderBy('id', 'ASC');

        return view('principal.menu-izq', compact( 'men', 'menuuno' ));
    }
}
