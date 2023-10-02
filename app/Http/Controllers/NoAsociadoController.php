<?php

namespace App\Http\Controllers;

use App\NoAsociado;
use Illuminate\Http\Request;

/**
 * Class NoAsociadoController
 * @package App\Http\Controllers
 */
class NoAsociadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noAsociados = NoAsociado::paginate();

        return view('no-asociado.index', compact('noAsociados'))
            ->with('i', (request()->input('page', 1) - 1) * $noAsociados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $noAsociado = new NoAsociado();
        return view('no-asociado.create', compact('noAsociado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(NoAsociado::$rules);

        $noAsociado = NoAsociado::create($request->all());

        return redirect()->route('no-asociados.index')
            ->with('success', 'NoAsociado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $noAsociado = NoAsociado::find($id);

        return view('no-asociado.show', compact('noAsociado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $noAsociado = NoAsociado::find($id);

        return view('no-asociado.edit', compact('noAsociado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  NoAsociado $noAsociado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NoAsociado $noAsociado)
    {
        request()->validate(NoAsociado::$rules);

        $noAsociado->update($request->all());

        return redirect()->route('no-asociados.index')
            ->with('success', 'NoAsociado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $noAsociado = NoAsociado::find($id)->delete();

        return redirect()->route('no-asociados.index')
            ->with('success', 'NoAsociado deleted successfully');
    }
}
