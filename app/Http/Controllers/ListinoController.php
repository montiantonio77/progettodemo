<?php

namespace App\Http\Controllers;

use App\Models\Listino;
use Illuminate\Http\Request;

class ListinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $listini = Listino::all();
        return view('listino.index', ['listini' => $listini]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('listino.create');
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
            'prezzo' => 'required',
            'attivo' => 'required',
        ]);

        $listino = Listino::create($request->all());
        if ($listino->exists) {
            // Operazione di inserimento avvenuta con successo
        } else {
            // Errore durante l'operazione di inserimento
        }
        return redirect()->route('listino.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Listino  $listino
     * @return \Illuminate\View\View
     */
    public function show(Listino $listino)
    {
        return view('listino.show', ['listino' => $listino]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Listino  $listino
     * @return \Illuminate\View\View
     */
    public function edit(Listino $listino)
    {
        return view('listino.edit', ['listino' => $listino]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Listino  $listino
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Listino $listino)
    {
        $request->validate([
            'point_id' => 'required',
            'servizio_id' => 'required',
            'prezzo' => 'required',
            'attivo' => 'required',
        ]);

        $updated = $listino->update($request->all());
        if ($updated) {
            // Operazione di aggiornamento avvenuta con successo
        } else {
            // Errore durante l'operazione di aggiornamento
        }
        return redirect()->route('listino.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Listino  $listino
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Listino $listino)
    {
        $deleted = $listino->delete();
        if ($deleted) {
            // Operazione di eliminazione avvenuta con successo
        } else {
            // Errore durante l'operazione di eliminazione
        }
        return redirect()->route('listino.index');
    }
}
