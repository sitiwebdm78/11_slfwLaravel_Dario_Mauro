<?php

namespace App\Http\Controllers;
use App\Models\Monument;
use Illuminate\Http\Request;
use App\Http\Requests\MonumentRequest;
/* use Illuminate\Foundation\Http\FormRequest; */


class OurtoursController extends Controller
{
    /* public  $visits = [

    ['id' => '1', 
    'visitname'=> 'Cristo Velato', 
    'img'=> '/mediasitenapolimania/Cristovelato.jpg', 
    'address' => 'Via Francesco De Sanctis, 19/21, 80134 Napoli', 
    'authorname' => 'Giuseppe Sanmartino',
    'year' => '1978',
    'story' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'],

    ['id' => '2',
    'visitname'=> 'Palazzo Reale',
    'img'=> '/mediasitenapolimania/PalazzoRealeNapoli.jpg',
    'address' => ' Piazza del Plebiscito, 1, 80132 Napoli',
    'authorname' => 'Domecico Fontana',
    'year' => '1978',
    'story' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'],

    ['id' => '3',
    'visitname'=> 'Chiostro di Santa Chiara',
    'img'=> '/mediasitenapolimania/ChiostroSantaChiara.jpg',
    'address' => 'Via Santa Chiara, 49/c, 80134 Napoli',
    'authorname' => 'Domenico Antonio Vaccaro',
    'year' => '1978',
    'story' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'],

    ['id' => '4',
    'visitname'=> 'Chiesa del Gesù Nuovo',
    'img'=> '/mediasitenapolimania/ChiesaGesùNapoli.jpg',
    'address' => 'Piazza del Gesù Nuovo, 2, 80134 Napoli',
    'authorname' => 'P. Giovanni Tristano',
    'year' => '1978',
    'story' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'],

    ['id' => '5',
    'visitname'=> 'Napoli Sotterranea',
    'img'=> '/mediasitenapolimania/NapoliSotterranea.jpg',
    'address' => ' Piazza San Gaetano 68/69, 80138 Napoli',
    'authorname' => 'Greci-Romani-Borbone',
    'year' => '1978',
    'story' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'],

    ['id' => '6',
    'visitname'=> 'Napoli Sotterranea',
    'img'=> '/mediasitenapolimania/NapoliSotterranea.jpg',
    'address' => ' Piazza San Gaetano 68/69, 80138 Napoli',
    'authorname' => 'Greci-Romani-Borbone',
    'year' => '1978',
    'story' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'],
    ]; */

    public function fnpgourTours () {
        $visits = Monument::all();
    return view('visits.vwourtours', ['visits'=>$visits]);

    }

    /*  public function fnpgVisitdetail($id){
        foreach ($this->visits as $visit) {
            if ($id == $visit['id']) {
                return view('visits.vwvisitdetail', ['visit' => $visit]);
            }
        }
    }
 */
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
