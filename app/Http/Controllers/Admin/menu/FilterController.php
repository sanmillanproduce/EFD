<?php

namespace App\Http\Controllers\Admin\menu;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Camera;
use App\Post;
use App\Area;
use App\Brand;
use App\Home;
use App\Pequena;
use App\Category;
use App\Product;
use App\Filter;
use App\Subbrand;

class FilterController extends Controller
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

    public function accesorios_filtro()
    {
        $menuuno = Area::orderBy('id', 'DESC')->where('id', '3')->paginate(400000);
        $navegacion = Brand::orderBy('name', 'ASC')->where('area_id', '3')->paginate(400000);
        $productos = Product::orderBy('name', 'ASC')->where('brand', '8')->paginate(400000);

        return view('menu.filtros.accesorios', compact('menuuno', 'navegacion', 'productos'));

    }
    public function filtros()
    {




        $menuuno = Brand::orderBy('name', 'ASC')->where('area_id', '3')->paginate(400000);
        $navegacion = Subbrand::orderBy('name', 'ASC')->where('area_id', '3')->paginate(400000);
        $productos = Product::orderBy('subbrand_id', 'ASC')->where('area_id', '3')->paginate(40000);

        return view('menu.filtros.filtros', compact('menuuno', 'navegacion', 'productos'));

    }




}
