<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

    class PublicController extends Controller

    {

    public function fnhpnapolimania () {
    return view('vwhpnapolimania');

    }

    public function fnpgAboutus (){
    return view('vwaboutus');

    }

    public function fnpgContacts (){
    return view('vwcontacts');

    }

   /*  public function fnpgVisitdetail($id){
        foreach ($this->visits as $visit) {
            if ($id == $visit['id']) {
                return view('vwvisitdetail', ['visit' => $visit]);
            }
        }
    } */

    public function fnpgContactUs (Request $request){
        $namesurname = $request->input('namesurname');
        $email = $request->input('email');
        $message = $request->input('message');
        $userData = compact('namesurname', 'email', 'message');

        try{
            Mail::to($email)->send(new ContactMail($userData));
        }catch(Exception $e){
            return redirect()->route('rthpnapolimania')->with('emailError', 'Siamo Spiacenti, ma non abbiamo ricevuto la tua emeil, contatta il supporto tecnico.');
        }
            return redirect()->route('rthpnapolimania')->with('emailSent', 'Hai Inviato correttamente il tuo indirizzo di posta elettronica.');
    }
}

