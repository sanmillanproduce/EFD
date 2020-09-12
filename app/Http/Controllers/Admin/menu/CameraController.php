<?php

namespace App\Http\Controllers\Admin\menu;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Product;
use App\Classification;
use App\Subclassification;
use App\Subarea;
use App\Name;
use App\Kit;

class CameraController extends Controller
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
    public function camara($id)
    {
        $clasificaciones = DB::table('classifications')->get();
        $subclasificaciones = DB::table('subclassifications')->get();

        $clasificaciones1 = DB::table('classifications')->where('id', $id)->get();

        $subclasificaciones1 = DB::table('subclassifications')->where('id', $id)->get();

        $subareas = Subarea::where('subclassification_id', $id)->get();

        $kits = DB::table('kits')->get();

        $productos = DB::table('products')->get();

        $names = DB::table('names')->get();

        $incluidos = DB::table('kit_products')->get();

        $extras = DB::table('kit_products')->where('type', 'EXTRA')->get();
dd($extras);
        return view('menu.general', compact('clasificaciones', 'subclasificaciones' , 'clasificaciones1', 'subclasificaciones1' , 'subareas', 'kits',  'productos', 'names', 'incluidos', 'extras'));


    }


}
