<?php

namespace App\Http\Controllers;

use App\Models\Vendita;
use Illuminate\Http\Request;

class VenditaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $vendite = Vendita::all();
        return view('vendita.index', ['vendite' => $vendite]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('vendita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'point_id' => 'required',
            'servizio_id' => 'required',
            'data' => 'required',
            'costo' => 'required',
        ]);

        $vendita = Vendita::create($request->all());
        if ($vendita->exists) {
            // Operazione di inserimento avvenuta con successo
        } else {
            // Errore durante l'operazione di inserimento
        }
        return redirect()->route('vendita.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vendita  $vendita
     * @return \Illuminate\View\View
     */
    public function show(Vendita $vendita)
    {
        return view('vendita.show', ['vendita' => $vendita]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vendita  $vendita
     * @return \Illuminate\View\View
     */
    public function edit(Vendita $vendita)
    {
        return view('vendita.edit', ['vendita' => $vendita]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vendita  $vendita
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Vendita $vendita)
    {
        $request->validate([
            'point_id' => 'required',
            'servizio_id' => 'required',
            'data' => 'required',
            'costo' => 'required',
        ]);

        $updated = $vendita->update($request->all());
        if ($updated) {
            // Operazione di aggiornamento avvenuta con successo
        } else {
            // Errore durante l'operazione di aggiornamento
        }
        return redirect()->route('vendita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vendita  $vendita
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Vendita $vendita)
    {
        $deleted = $vendita->delete();
        if ($deleted) {
            // Operazione di eliminazione avvenuta con successo
        } else {
            // Errore durante l'operazione di eliminazione
        }
        return redirect()->route('vendita.index');
    }
}
