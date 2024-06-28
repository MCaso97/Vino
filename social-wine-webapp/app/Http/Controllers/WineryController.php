<?php

namespace App\Http\Controllers;

use App\Models\Winery;
use Illuminate\Http\Request;

class WineryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $winery = Winery::all();
        return response(view('winery.index', compact('winery')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response(view('winery.create'));
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
            'born',
            'description',
            'email',
            'password',
            'phone',
            'vat' => 'required | min:9 | max:19',
            'address',
            'city',
            'country',
            'image_path'
        ]);

        Winery::create($request -> all());

        return redirect() -> route('winery.index')
                          -> with ('suiccess', 'Cantina inserita con successo.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Winery  $winery
     * @return \Illuminate\Http\Response
     */
    public function show(Winery $winery)
    {
        $winery = Winery::findOrFail($winery);
        return response(view('winery.show', compact('winery')));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Winery  $winery
     * @return \Illuminate\Http\Response
     */
    public function edit(Winery $winery)
    {
        $winery = Winery::findOrFail($winery);
        return response(view('winery.edit', compact('winery')));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Winery  $winery
     * 
     */
    public function update(Request $request, Winery $winery)
    {
        $request -> validate ([
            'name',
            'born',
            'description',
            'email',
            'password',
            'phone',
            'vat' => 'required | min:9 | max:19',
            'address',
            'city',
            'country',
            'image_path'
        ]);

        $winery = Winery::findOrFail($winery);
        $winery -> update($request -> all());

        return redirect() -> route ('winery.index')
                          -> with ('success', 'Cantina modificata con successo.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Winery  $winery
     * 
     */
    public function destroy(Winery $winery)
    {
        $winery = Winery::findOrFail($winery);
        $winery -> delete();

        return redirect() -> route('winery.index')
                          -> with ('success', 'Cantina eliminata con successo.');
    }
}
