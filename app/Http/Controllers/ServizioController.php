<?php

namespace App\Http\Controllers;

use App\Models\Servizio;
use Illuminate\Http\Request;

class ServizioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $servizi = Servizio::all();
        return view('servizio.index', ['servizi' => $servizi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('servizio.create');
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
            'nome' => 'required',
            'descrizione' => 'required',
            'note' => 'required',
        ]);

        $servizio = Servizio::create($request->all());
        if ($servizio->exists) {
            // Operazione di inserimento avvenuta con successo
        } else {
            // Errore durante l'operazione di inserimento
        }
        return redirect()->route('servizio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servizio  $servizio
     * @return \Illuminate\View\View
     */
    public function show(Servizio $servizio)
    {
        return view('servizio.show', ['servizio' => $servizio]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servizio  $servizio
     * @return \Illuminate\View\View
     */
    public function edit(Servizio $servizio)
    {
        return view('servizio.edit', ['servizio' => $servizio]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servizio  $servizio
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Servizio $servizio)
    {
        $request->validate([
            'nome' => 'required',
            'descrizione' => 'required',
            'note' => 'required',
        ]);

        $updated = $servizio->update($request->all());
        if ($updated) {
            // Operazione di aggiornamento avvenuta con successo
        } else {
            // Errore durante l'operazione di aggiornamento
        }
        return redirect()->route('servizio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servizio  $servizio
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Servizio $servizio)
    {
        $deleted = $servizio->delete();
        if ($deleted) {
            // Operazione di eliminazione avvenuta con successo
        } else {
            // Errore durante l'operazione di eliminazione
        }
        return redirect()->route('servizio.index');
    }
}
