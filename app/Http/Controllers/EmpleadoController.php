<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Empleado;

class EmpleadoController extends Controller
{
    public function index(Request $request)
    {
        if($request){
            $query=trim($request->get('searchText'));
            $empleados = DB::table('empleado')->where('nombre','LIKE','%'.$query.'%')->orderBy('idempleado','DESC')->paginate(2);
            return view('pages.empleado.index', ["empleados"=> $empleados,"searchtext"=> $query]);
        }
    }
    public function create()
    {
        return view('pages.empleado.create');
    }
    public function store ()
    {
        $data = request()->all();
        $validator = Validator::make($data, [
            'rut' => 'required|max:10',
            'nombre' => 'required|max:20',
            'cargo' => 'nullable|max:20',
            'depto' => 'required|max:20',
            'valor_hora' => 'required|integer',
            'tipo_empleado' =>'required|max:20',
            'estado' => 'required|max:30'

        ]);

        if ($validator->fails()) {
            return redirect('/dashboard/empleado')
                        ->withErrors($validator)
                        ->withInput();
        }else
        {
            Empleado::create([
                'idempleado' => $data['rut'],
                'nombre' => $data['nombre'],
                'cargo' => $data['cargo'],
                'depto' => $data['depto'],
                'valor_hora' => $data['valor_hora'],
                'tipo_empleado' =>$data['tipo_empleado'],
                'estado' => $data['estado'],
            ]);
            return back()->with('message', array('title' => '¡Empleado registrado con éxito!', 'body'=>'Se ha registrado un nuevo empleado'));
        }
    }
    
}