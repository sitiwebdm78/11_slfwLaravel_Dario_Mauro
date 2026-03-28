<?php

namespace App\Http\Controllers;

use App\Http\Requests\MyTourRequest;
use App\Http\Requests\EditMytour;
use App\Models\MyTours;
use Illuminate\Http\Request;
class MyTourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mytours = MyTours::all();
        return view('mytours.index', compact('mytours'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mytours.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MyTourRequest $request)
    {
        $mytour = MyTours::create([
            'visitname' => $request->visitname,
            'year' => $request->year,
            'experience' => $request->experience,
            'img' => $request->file('img')->store('img', 'public'),

        ]);

        return redirect()->route('rthpnapolimania')->with('message', 'Hai inserito correttamente il Tuo Tour Preferito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(MyTours $mytour)
    {
        return view('mytours.show', compact('mytour'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MyTours $mytour)
    {
        return view('mytours.edit', compact('mytour'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditMytour $request, MyTours $mytour){
        $mytour->update([
            'visitname' => $request->visitname,
            'year' => $request->year,
            'experience' => $request->experience,
        ]);

        if($request->hasFile('img')){
            $request->validate(['img' => 'image']);
            $mytour->update([
                'img' => $request->file('img')->store('img', 'public')
            ]);
        }

        return redirect()->route('mytours.index', $mytour)->with('message', 'Le tue modifiche sono state applicate.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MyTours $mytour)
    {
        $mytour->delete();
        return redirect()->route('mytours.index')->with('message', 'Hai cancellato il tuo Tour Preferito.');
    }
}