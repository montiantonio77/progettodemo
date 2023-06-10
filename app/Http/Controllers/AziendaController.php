<?php

namespace App\Http\Controllers;

use App\Models\Azienda;
use Illuminate\Http\Request;

class AziendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View

     */
    public function index()
    {
        /* Restituisce una lista che mostra un elenco di aziende anche se per questa traccia è una singola utilizzando il metodo statico all() del modello Azienda */
        $aziende = Azienda::all();
        return view('azienda.index', ['aziende' => $aziende]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        /* Questo metodo restituisce una vista con i campi necessari all'inserimento di una nuova azienda (in questo caso potrebbe essere una sede diversa della stessa azienda) */
        return view('azienda.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
/* Questo metodo salva una nuova azienda nel database. Prima di farlo, valida i dati inviati nella richiesta utilizzando il metodo "validate()"
che controlla se i campi richiesti sono presenti e se rispettano alcune regole specificate. Se la validazione ha successo, crea una nuova istanza di "Azienda" utilizzando il
metodo statico "create()" e poi reindirizza a azienda.index. */

        $request->validate([
            'nome' => 'required',
            'indirizzo' => 'required',
            'cap' => 'required',
            'provincia' => 'required',
            'regione' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
            'nome_amministratore' => 'required',
        ]);


        $azienda = Azienda::create($request->all());
        if ($azienda->exists) {
            // Operazione di inserimento avvenuta con successo
        } else {
            // Errore durante l'operazione di inserimento
        }
        return redirect()->route('azienda.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Azienda  $azienda
     * @return \Illuminate\View\View
     */
    public function show(Azienda $azienda)
    {
        /*Il metodo "show" restituisce una vista che mostra i dettagli di una specifica azienda.  */
        return view('azienda.show', ['azienda' => $azienda]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Azienda  $azienda
     * @return \Illuminate\View\View
     */
    public function edit(Azienda $azienda)
    {
     /* Il metodo "edit" restituisce una vista per modificare i dettagli di una specifica azienda. Accetta un'istanza di "Azienda" come parametro. */

        return view('azienda.edit', ['azienda' => $azienda]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Azienda  $azienda
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Azienda $azienda)
    {
        /* Il metodo "update" aggiorna i dettagli di una specifica azienda nel database. Esegue una validazione dei dati , quindi chiama il metodo "update()"
        sull'istanza di "Azienda" passando i dati della richiesta. Infine, reindirizza a azienda.index */

        $request->validate([
            'nome' => 'required',
            'indirizzo' => 'required',
            'cap' => 'required',
            'provincia' => 'required',
            'regione' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
            'nome_amministratore' => 'required',
        ]);


        $updated = $azienda->update($request->all());
        if ($updated) {
            // Operazione di aggiornamento avvenuta con successo
        } else {
            // Errore durante l'operazione di aggiornamento
        }
        return redirect()->route('azienda.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Azienda  $azienda
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Azienda $azienda)
    {
        /* Il metodo "destroy" elimina una specifica azienda dal database utilizzando il metodo "delete()". Successivamente, reindirizza a azienda.index */

        $deleted = $azienda->delete();
        if ($deleted) {
            // Operazione di eliminazione avvenuta con successo
        } else {
            // Errore durante l'operazione di eliminazione
        }
        return redirect()->route('azienda.index');
    }
}
