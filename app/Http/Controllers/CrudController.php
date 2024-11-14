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
        //return view('/edit');
        return view('/home', compact('getClientes', 'getEmpleados'));
    }

    //CRUD CLIENTES
    public function clientes(){
        $getClientes = Clientes::all();
        return view('/clientes', compact('getClientes'));
    }

    public function guardarCL(Request $request){
        Clientes::create($request->all());
        //dd($request);
        return redirect()->to('/home');
    }

    public function editarCL($id){
        $editCliente = Clientes::where('id', $id)->firstOrFail();
        return view('editarCL', compact('editCliente'));
    }

    public function updateCL(Request $request, $id){
        $updateCL = Clientes::findOrFail($id);
        $requestCL = $request->all();
        $updateCL->update($requestCL);
        return redirect()->to('/home');
    }

    public function deleteCL($id){
        $eliminarCL = Clientes::findOrFail($id);
        $eliminarCL->delete();
        return redirect()->to('/home');
    }

    //CRUD EMPLEADOS
    public function empleados(){
        $getEmpleados = Empleados::all();
        return view('/empleados', compact('getEmpleados'));
    }

    public function guardarEM(Request $request){
        Empleados::create($request->all());
        //dd($request);
        return redirect()->to('/home');
    }

    public function editarEM($id){
        $editEmpleados = Empleados::where('id', $id)->firstOrFail();
        return view('editarEM', compact('editEmpleados'));
    }

    public function updateEM(Request $request, $id){
        $updateEM = Empleados::findOrFail($id);
        $requestEM = $request->all();
        $updateEM->update($requestEM);
        return redirect()->to('/home');
    }

    public function deleteEM($id){
        $eliminarEM = Empleados::findOrFail($id);
        $eliminarEM->delete();
        return redirect()->to('/home');
    }
}
