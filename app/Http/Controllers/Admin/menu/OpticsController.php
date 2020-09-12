<?php

namespace App\Http\Controllers\Admin\menu;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Camera;
use App\Post;
use App\Brand;
use App\Home;
use App\Product;
use App\Classification;
use App\Subclassification;
use App\Subarea;


class OpticsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function optic()
    {
        $men = Classification::orderBy('id', 'ASC')->where('slug', 'optica')->paginate(400000);
        $menuuno = Subclassification::orderBy('id', 'ASC')->where('slug', 'anamorfico')->paginate(400000);
        $menudos = Subclassification::orderBy('id', 'ASC')->where('classification_id', '2')->paginate(400000);
        $navegacion = Subarea::orderBy('name', 'ASC')->where('classification_id', '2')->paginate(400000);
        $productos = Product::orderBy('subarea_id', 'ASC')->where('classification_id', '2')->paginate(40000);

        return view('menu.optica.optic', compact('menuuno' , 'navegacion', 'productos', 'menudos', 'men'));

    }
}
