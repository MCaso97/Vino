<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return response(view('event.index', compact('event')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response(view('event.create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     */
    public function store(Request $request)
    {
        $request -> validate ([
            'name',
            'date',
            'category',
            'description',
            'price', 
            'citta',
            'regione',
            'via',
            'image_path',
            'supplier_id',
        ]);

        Event::create($request -> all());

        return redirect() -> route('event.index')
                          -> with ('success', 'Evento inserito con successo.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        $event = Event::findOrFail($event);
        return response(view('event', compact('event'))); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $event = Event::findOrFail($event);
        return response(view('event.edit', compact('event')));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * 
     */
    public function update(Request $request, Event $event)
    {
        $request -> validate ([
            'name',
            'date',
            'category',
            'description',
            'price', 
            'citta',
            'regione',
            'via',
            'image_path',
            'supplier_id',
        ]);

        $event = Event::findOrFail($event);
        $event -> update($request -> all());

        return redirect() -> route('event.index')
                          -> with ('success', 'Evento modificato con successo.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * 
     */
    public function destroy(Event $event)
    {
        $event = Event::findOrFail($event);
        $event -> delete();

        return redirect() -> route('event')
                          -> with ('success', 'Evento eliminato con successo.');
    }
}
