<?php

namespace App\Http\Controllers;

use App\EsAsociado;
use Illuminate\Http\Request;

/**
 * Class EsAsociadoController
 * @package App\Http\Controllers
 */
class EsAsociadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $esAsociados = EsAsociado::paginate();

        return view('es-asociado.index', compact('esAsociados'))
            ->with('i', (request()->input('page', 1) - 1) * $esAsociados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $esAsociado = new EsAsociado();
        return view('es-asociado.create', compact('esAsociado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(EsAsociado::$rules);

        $esAsociado = EsAsociado::create($request->all());

        return redirect()->route('es-asociados.index')
            ->with('success', 'EsAsociado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $esAsociado = EsAsociado::find($id);

        return view('es-asociado.show', compact('esAsociado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $esAsociado = EsAsociado::find($id);

        return view('es-asociado.edit', compact('esAsociado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  EsAsociado $esAsociado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EsAsociado $esAsociado)
    {
        request()->validate(EsAsociado::$rules);

        $esAsociado->update($request->all());

        return redirect()->route('es-asociados.index')
            ->with('success', 'EsAsociado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $esAsociado = EsAsociado::find($id)->delete();

        return redirect()->route('es-asociados.index')
            ->with('success', 'EsAsociado deleted successfully');
    }
}
