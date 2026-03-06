<x-cmplytnm> 
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <h1 class="text-center mt-5 pt-3">Richiedi la tua visita guidata</h1>
                <form method="POST" action="{{ route('visit.rtsubmit') }}" class="formcustom2 centerform shadow-lg">
                    @csrf
                    <div class="mb-3">
                        <label for="visitname" class="form-label ms-4">Nome del Monumeto</label>
                        <input type="text" name='visitname' class="form-control inputform2" id="visitname" aria-describedby="visitnameHelp">
                    </div>
                    <div class="mb-3">
                        <label for="autorname" class="form-label ms-4">Autore dell'Opera</label>
                        <input type="text" name='authorname' class="form-control inputform2 " id="autorname" aria-describedby="autornameHelp">
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label ms-4">Anno</label>
                        <input type="text" name='year' class="form-control inputform2" id="year" aria-describedby="yearHelp">
                    </div>
                    <div class="mb-3">
                        <label for="story" class="form-label ms-4">Origini del Monumento</label>
                        <textarea name="story" id="" cols="30" rows="10" class="form-control inputform2 textareastyle"></textarea>
                    </div>
                    <div class="buttonform">
                        <button type="submit" class="btn btn-primary align-items-center">Inserisci il Monumento</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        
</x-cmplytnm>
    
   