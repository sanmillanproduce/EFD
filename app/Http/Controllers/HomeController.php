<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use Barryvdh\DomPDF\Facade as PDF;



use App\Classification;
use App\Subclassification;
use App\Subarea;
use App\Kit;
use App\Mail\MessageReceived;
use App\Product;
use App\Name;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $clasificaciones = DB::table('classifications')->get();
        $subclasificaciones = DB::table('subclassifications')->get();

        return view('principal.home', compact( 'clasificaciones', 'subclasificaciones' ));
    }

    public function noticia($name)
    {
       /* $small  = News::all();
        $post = News::where('name', $slug)->first();
        return view('web.noticia', compact('post', 'small'));*/
    }
    public function producto($id)
    {
        $clasificaciones = DB::table('classifications')->get();
        $subclasificaciones = DB::table('subclassifications')->get();

        $clasificaciones1 = DB::table('classifications')->where('id', $id)->get();
        $subclasificaciones1 = DB::table('subclassifications')->where('id', $id)->get();
        $subareas = Subarea::where('subclassification_id', $id)->get();
        $product = Kit::where('id', $id)->first();

        $kits = DB::table('kits')->get();
        $productos = DB::table('products')->get();
        $names = DB::table('names')->get();
        $incluidos = DB::table('kit_products')->get();
        $extras = DB::table('kit_products')->where('type', 'EXTRA')->get();

        return view('web.producto', compact('clasificaciones', 'subclasificaciones' , 'clasificaciones1', 'subclasificaciones1' , 'subareas', 'kits',  'productos', 'names', 'incluidos', 'product', 'extras'));


    }

    public function log()
    {
        return view('auth.login');

    }

//EFD-Servicios-------------->>>>>>>>>>>>>>
public function general($slug)
    {
        $clasificaciones = DB::table('classifications')->get();

        $subclasificaciones = DB::table('subclassifications')->get();

        $clasificaciones1 = DB::table('classifications')->where('id', $slug)->get();

        $subclasificaciones1 = DB::table('subclassifications')->where('id', $slug)->get();

        $subareas = Subarea::where('subclassification_id', $slug)->get();

        $kits = DB::table('kits')->get();

        $productos = DB::table('products')->get();

        $names = DB::table('names')->get();

        $incluidos = DB::table('kit_products')->get();

        $extras = DB::table('kit_products')->where('type', 'EXTRA')->get();

        return view('menu.general', compact('clasificaciones', 'subclasificaciones' , 'clasificaciones1', 'subclasificaciones1' , 'subareas', 'kits',  'productos', 'names', 'incluidos', 'extras'));


    }


//EFD Info ----->>>>>>><
    public function mision()
    {
        $clasificaciones = DB::table('classifications')->get();
        $subclasificaciones = DB::table('subclassifications')->get();
        return view('efd.mision', compact( 'clasificaciones', 'subclasificaciones'));

    }
    public function sedes()
    {
        $clasificaciones = DB::table('classifications')->get();
        $subclasificaciones = DB::table('subclassifications')->get();
        return view('efd.sedes', compact( 'clasificaciones', 'subclasificaciones'));

    }
    public function directorio()
    {
        $clasificaciones = DB::table('classifications')->get();
        $subclasificaciones = DB::table('subclassifications')->get();
        return view('efd.directorio', compact( 'clasificaciones', 'subclasificaciones'));

    }
    public function contacto()
    {
        $clasificaciones = DB::table('classifications')->get();
        $subclasificaciones = DB::table('subclassifications')->get();
        return view('efd.contacto', compact( 'clasificaciones', 'subclasificaciones'));

    }


    public function filmografia(){


        $clasificaciones = DB::table('classifications')->get();
        $subclasificaciones = DB::table('subclassifications')->get();
        $años = DB::table('years')->orderBy('id','DESC')->get();
        $filmografias = DB::table('filmographies')->get();


        return view('experience.experiencia', compact( 'clasificaciones', 'subclasificaciones', 'años', 'filmografias' ));

    }


    public function pdf_filmografia()
    {
        /**
         * toma en cuenta que para ver los mismos
         * datos debemos hacer la misma consulta
        **/
        $products = DB::table('years')->orderBy('id','DESC')->get();
        $filmografias = DB::table('filmographies')->get();
        $pdf = PDF::loadView('pdf.filmografia', compact('products', 'filmografias'));

        return $pdf->download('filmografias.pdf');
    }

    public function pdf_contacto()
    {

       $contacto =  request()->validate([
            'name'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'Business_Type'=>'required',
            'tema'=>'required',


         ]);

         Mail::to('ernesto.mej.cam@gmail.com')->queue(new MessageReceived($contacto));

         $clasificaciones = DB::table('classifications')->get();
         $subclasificaciones = DB::table('subclassifications')->get();
 
 
         return "Mensaje enviado satisfatoriamente.";
 
    }


}
