<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;
use App\Models\Empleados;

class CrudController extends Controller
{
    public function home(){
        $getClientes = Clientes::all();
        $getEmpleados = Empleados::all();
        //dd($getClientes, $getEmpleados);
        return view('/home', compact('getClientes', 'getEmpleados'));
    }
}
