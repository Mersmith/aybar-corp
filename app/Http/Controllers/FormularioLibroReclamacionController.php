<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormularioLibroReclamacion;

class FormularioLibroReclamacionController extends Controller
{
    public function index()
    {
        return view('web.paginas.libro-de-reclamaciones');
    }

    public function enviar(Request $request)
    {

        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido_paterno' => 'required|string|max:255',
            'apellido_materno' => 'required|string|max:255',
            'domicilio' => 'required|string|max:255',
            'telefono' => 'nullable|regex:/^[0-9]{9}$/',
            'email' => 'nullable|email|max:255',
            'tipo_documento' => 'required|in:dni,ruc,ce',
            'numero_documento' => 'required|string|max:20',
            'tipo_bien_contratado' => 'required|in:producto,servicio',
            'monto_reclamado' => 'nullable|numeric|min:0',
            'descripcion' => 'required|string',
            'tipo_pedido' => 'required|in:reclamo,queja',
            'detalle' => 'required|string',
            'pedido' => 'required|string',
        ], [
            'nombre.required' => 'El nombre es obligatorio.',
            'apellido_paterno.required' => 'El apellido paterno es obligatorio.',
            'apellido_materno.required' => 'El apellido materno es obligatorio.',
            'domicilio.required' => 'El domicilio es obligatorio.',
            'tipo_documento.in' => 'Seleccione un tipo de documento válido.',
            'tipo_bien_contratado.in' => 'Seleccione si se trata de un producto o servicio.',
            'tipo_pedido.in' => 'Seleccione si es un reclamo o una queja.',
        ]);

        $formulario = FormularioLibroReclamacion::create([
            'tipo_formulario_id' => 1,
            'serie' => 'TCK',
            'nombre' => $request->nombre,
            'apellido_paterno' => $request->apellido_paterno,
            'apellido_materno' => $request->apellido_materno,
            'domicilio' => $request->domicilio,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'tipo_documento' => $request->tipo_documento,
            'numero_documento' => $request->numero_documento,
            'tipo_bien_contratado' => $request->tipo_bien_contratado,
            'monto_reclamado' => $request->monto_reclamado,
            'descripcion' => $request->descripcion,
            'tipo_pedido' => $request->tipo_pedido,
            'detalle' => $request->detalle,
            'pedido' => $request->pedido,
        ]);

        return back()->with('success', 'Tu reclamo fue enviado correctamente. Código: ' . $formulario->codigo);
    }
}
