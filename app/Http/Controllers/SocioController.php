<?php

namespace App\Http\Controllers;

use App\Socio;
use Illuminate\Http\Request;

class SocioController extends Controller
{
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        var_dump($request->all());
        die();
        

        return 'hola';
    }

    public function crear_categoriacursos(Request $request)
    {
        $rh = new \ResponseHelper();

        $validator = Validator::make($request->all(), [
            'nombre' => 'required|unique:categoria_cursos',
        ]);

        if($validator->fails()){
            return view("mensajes.error")->with('rh', $rh)
                                         ->withErrors($validator);
        }

        $categoria = new CategoriaCursos();
        $categoria->nombre = $request->input("nombre");
        $categoria->ruta = $request->input("ruta");

        if($categoria->save())
        {
            $rh->response = true;
            $rh->message = "Categoría agregada correctamente";
            $rh->label = "Categoría creada";
            $rh->form = "/form_nuevo_categoriacursos";
            $rh->ruta = "admin.categoriacursos";
            $rh->title = "Crear categoría";

            return view("mensajes.correcto")->with('rh', $rh);
        }
        else
        {
            return view("mensajes.error")->with('rh', $rh);
        }
    }

   
    public function form_nuevo_socio(){
        return view("create");
    }
}
