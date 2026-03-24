<?php

namespace App\Http\Controllers;
use App\Models\Monument;
use Illuminate\Http\Request;
use App\Http\Requests\MonumentRequest;
/* use Illuminate\Foundation\Http\FormRequest; */


class OurtoursController extends Controller

{

    public function fnpgourTours () {
        $visits = Monument::all();
            return view('visits.vwourtours', ['visits'=>$visits]);

    }
    
    public function fnCreate(){
        return view('visits.vwcreate');
    }
    
    public function fnVisitStore(MonumentRequest $request){

        $monument = Monument::create([
            'visitname' => $request->visitname,
            'authorname' => $request->authorname,
            'year' => $request->year,
            'story' => $request->story,
            'img' => $request->file('img')->store('img', 'public'),

            /* dd($request->all()) */

        ]);

         return redirect()->route('rthpnapolimania')->with('successMessage', 'Hai inserito correttamente la richiesta per aggiungere il tour di un un nuovo monumento.');
    }
       /*  METODO SEMPRE FUNZIONALE MA MENO SICURO
       
       $monument = new Monument();
        $monument->visitname = $request->visitname;
        $monument->authorname = $request->authorname;
        $monument->year = $request->year;
        $monument->story = $request->story;
        $monument->save();

        return redirect()->route('rthpnapolimania')->with('successMessage', 'Hai inserito correttamente la richiesta per aggiungere il tour di un un nuovo monumento.');
    }
 */
}
