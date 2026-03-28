<x-cmplytnm>
    <x-displaymessage />
    <x-displayerror />  
    <div class="container-fluid custombody2 vh-100">
        <div class="row mb-5">
            <div class="col-12 mt-4">
                <h1 class="text-center mt-5 pt-3 txtwht">Salva la Tua Esperienza a Napoli</h1>
                <form method="POST" action="{{ route('mytours.submit') }}" enctype="multipart/form-data" class="formcustom2 centerform shadow-lg">
                    @csrf
                    <div class="mb-3">
                        <label for="visitname" class="form-label ms-4 txtwht">Il Tuo Monumento Preferito</label>
                        <input type="text" name='visitname' class="form-control inputform2" id="visitname" aria-describedby="visitnameHelp" value="{{old('visitname')}}">
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label ms-4 txtwht">Anno</label>
                        <input type="text" name='year' class="form-control inputform2" id="year" aria-describedby="yearHelp" value="{{old('year')}}">
                    </div>
                    <div class="mb-3">
                        <label for="experience" class="form-label ms-4 txtwht">Raccontaci la Tua esperienza</label>
                        <textarea name="experience" id="" cols="30" rows="10" class="form-control inputform2 textareastyle">{{old('experience')}}</textarea>
                    </div>
                        <div class="mb-3">
                        <label for="img" class="form-label ms-4 txtwht">Inserisci un'Immagine di Ricrdo</label>
                        <input type="file" name='img' class="form-control inputform2" id="img" aria-describedby="imgHelp">
                    </div>
                    <div class="buttonform">
                        <button type="submit" class="btn btn-primary align-items-center mt-2 mb-3">Salva la Tua Esperienza</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        
</x-cmplytnm>
    
   