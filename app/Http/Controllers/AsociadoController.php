<?php

namespace App\Http\Controllers;

use App\Asociado;
use App\EsAsociado;
use Illuminate\Http\Request;
use App\Producto; 

/**
 * Class AsociadoController
 * @package App\Http\Controllers
 */
class AsociadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asociados = Asociado::paginate();

        return view('asociado.index', compact('asociados'))
            ->with('i', (request()->input('page', 1) - 1) * $asociados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = Producto::all(); 
        $es_asociado = EsAsociado::all(); 


        $asociado = new Asociado();
        return view('asociado.create', compact('asociado', 'productos', 'es_asociado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Asociado::$rules);

        $asociado = Asociado::create($request->all());

        return redirect()->route('asociados.index')
            ->with('success', 'Asociado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asociado = Asociado::find($id);

        return view('asociado.show', compact('asociado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asociado = Asociado::find($id);

        return view('asociado.edit', compact('asociado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Asociado $asociado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asociado $asociado)
    {
        request()->validate(Asociado::$rules);

        $asociado->update($request->all());

        return redirect()->route('asociados.index')
            ->with('success', 'Asociado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $asociado = Asociado::find($id)->delete();

        return redirect()->route('asociados.index')
            ->with('success', 'Asociado deleted successfully');
    }
}
