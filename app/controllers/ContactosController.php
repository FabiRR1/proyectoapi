<?php

namespace App\Controllers;
use App\Models\Contactos;

class ContactosController extends Controller{

    public function index()
{
    return response()->json([
        "mensaje" => "El controlador funciona correctamente"
    ]);
}


}