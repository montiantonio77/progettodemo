<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\Point;
use Illuminate\Http\Request;

class PointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
         /* Restituisce una lista che mostra un elenco di point utilizzando il metodo statico all() del modello Point */
        $points = Point::all();
        return view('point.index', ['points' => $points]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
         /* Questo metodo restituisce una vista con i campi necessari all'inserimento di un nuovo Point */
        return view('point.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

/* Questo metodo salva un nuovo point nel database. Prima di farlo, valida i dati inviati nella richiesta utilizzando il metodo "validate()"
che controlla se i campi richiesti sono presenti e se rispettano alcune regole specificate. Se la validazione ha successo, crea una nuova istanza di "Point" utilizzando il
metodo statico "create()" e poi reindirizza all'point.index. */

        $request->validate([
            'azienda_id' => 'required',
            'nome' => 'required',
            'indirizzo' => 'required',
            'cap' => 'required',
            'provincia' => 'required',
            'regione' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
        ]);

        $point = Point::create($request->all());
        if ($point->exists) {
            // Operazione di inserimento avvenuta con successo
        } else {
            // Errore durante l'operazione di inserimento
        }
        return redirect()->route('point.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Point  $point
     * @return \Illuminate\View\View
     */
    public function show(Point $point)
    {
         /*Il metodo "show" restituisce una vista che mostra i dettagli di uno specifico point.  */
        return view('point.show', ['point' => $point]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Point  $point
     * @return \Illuminate\View\View
     */
    public function edit(Point $point)
    {
        /* Il metodo "edit" restituisce una vista per modificare i dettagli di uno specifico point. Accetta un'istanza di "Point" come parametro. */
        return view('point.edit', ['point' => $point]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Point  $point
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Point $point)
    {

/* Il metodo "update" aggiorna i dettagli di uno specifico point nel database. Esegue una validazione dei dati , quindi chiama il metodo "update()"
        sull'istanza di "Point" passando i dati della richiesta. Infine, reindirizza a point.index */

        $request->validate([
            'azienda_id' => 'required',
            'nome' => 'required',
            'indirizzo' => 'required',
            'cap' => 'required',
            'provincia' => 'required',
            'regione' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
        ]);

        $updated = $point->update($request->all());
        if ($updated) {
            // Operazione di aggiornamento avvenuta con successo
        } else {
            // Errore durante l'operazione di aggiornamento
        }
        return redirect()->route('point.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Point  $point
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Point $point)
    {
         /* Il metodo "destroy" elimina uno specifico point dal database utilizzando il metodo "delete()". Successivamente, reindirizza a point.index */
        $deleted = $point->delete();
        if ($deleted) {
            // Operazione di eliminazione avvenuta con successo
        } else {
            // Errore durante l'operazione di eliminazione
        }
        return redirect()->route('point.index');
    }
}
