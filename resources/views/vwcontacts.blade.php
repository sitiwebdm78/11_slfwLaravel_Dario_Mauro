<x-cmplytnm class="">
    <div class="container-fluid custombody1 vh-100">
        <div class="row mb-5">
            <div class="col-12">
                <h1 class="text-center mt-5 pt-3">Contattaci</h1>
                <form  method="POST" action="{{route('rtcontact-us')}}" class="formcustom shadow-lg centerform">
                    @csrf
                    <div class="mb-3">
                        <label for="formnamesurname" class="form-label ms-5">Inserisci il tuo Nome e Cognome</label>
                        <input type="text" class="form-control inputform " id="formnamesurname" name="namesurname">
                    </div>
                    <div class="mb-3">
                        <label for="inputmail" class="form-label ms-5">Inserisci il tuo Indirizzo di Posta Elettronica</label>
                        <input type="email" class="form-control inputform" id="inputmail" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="messageform" class="form-label ms-5">Lascia un messaggio per Fissare un appuntamento.</label>
                        <textarea name="message" class="form-control inputform" id="messageform" cols="30" rows="10"></textarea>
                    </div>
                    <div class="buttonform">
                        <button type="submit" class="btn btn-primary align-items-center">Invia</button>
                    </div>  
                </form>
            </div>
        </div>
    </div>    
</x-cmplytnm>