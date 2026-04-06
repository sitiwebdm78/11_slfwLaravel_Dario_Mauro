<?php

    namespace App\Http\Controllers;
    
    use App\Models\Monument;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Http\Request;
    use App\Http\Requests\MonumentRequest;
    
    class OurtoursController extends Controller
    
    {
    public function fnpgourTours () {
    $visits = Monument::with('user')->get();
    return view('visits.vwourtours', ['visits'=>$visits]);
    
    }
    
   public function fnVisitStore(MonumentRequest $request){
    $data = [
        'visitname' => $request->visitname,
        'authorname' => $request->authorname,
        'year' => $request->year,
        'story' => $request->story,
        'img' => $request->file('img')->store('img', 'public'),
        'user_id' => Auth::id(),
        'is_default_image' => false
    ];
    
    $monument = Monument::create($data);
    
    return redirect()->route('rthpnapolimania')->with('successMessage', 'Hai inserito correttamente la richiesta per aggiungere il tour di un nuovo monumento.');
}
    
    public function fnCreate(){
    return view('visits.vwcreate');
    
    }
    
    public function edit(Monument $monument)
    {
    if($monument->user_id == Auth::user()->id){
    return view('visits.vwmonumentedit', compact('monument'));
    }else{
    return redirect()->route('visit.rtourtours')->with('message', 'Non Puoi Vedere questa pagina.');
    }
    }
    
    public function update(MonumentRequest $request, Monument $monument)
    {
    if($monument->user_id == Auth::user()->id){
    $monument->update([
    'visitname' => $request->visitname,
    'authorname' => $request->authorname,
    'year' => $request->year,
    'story' => $request->story,
    ]);
    
    if($request->hasFile('img')){
    $monument->update([
    'img' => $request->file('img')->store('img', 'public')
    ]);
    }

        return redirect()->route('visit.rtourtours')->with('message', 'Le tue modifiche sono state applicate.');
    }else{
        return redirect()->route('visit.rtourtours')->with('message', 'Non Puoi Vedere questa pagina.');
    }
    }

public function fnpgVisitdetail(Monument $monument)
{
    return view('visits.vwvisitdetail', compact('monument'));
}
    
    }
    