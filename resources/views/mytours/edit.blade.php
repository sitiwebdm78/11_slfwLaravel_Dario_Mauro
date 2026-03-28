<x-cmplytnm>
    <x-displaymessage />
    <x-displayerror />  
    <div class="container-fluid custombody2 vh-100">
        <div class="row mb-5">
            <div class="col-12 mt-4">
                <h1 class="text-center mt-5 pt-3 txtwht">Modifica la Tua Esperienza a Napoli</h1>
                <form method="POST" action="{{ route('mytours.update', $mytour ) }}" enctype="multipart/form-data" class="formcustom2 centerform shadow-lg">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="visitname" class="form-label ms-4 txtwht">Modifica Monumento Preferito</label>
                        <input type="text" name="visitname" class="form-control inputform2" id="visitname" aria-describedby="visitnameHelp" value="{{ $mytour->visitname }}">
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label ms-4 txtwht">Modifica Anno</label>
                        <input type="text" name="year" class="form-control inputform2" id="year" aria-describedby="yearHelp" value="{{ $mytour->year }}">
                    </div>
                    <div class="mb-3">
                        <label for="experience" class="form-label ms-4 txtwht">Modifica la Tua experience</label>
                        <textarea name="experience" id="experience" cols="30" rows="10" class="form-control inputform2 textareastyle">{{ $mytour->experience }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label ms-4 txtwht">Modifica Immagine di Ricordo</label>
                        <input type="file" name="img" class="form-control inputform2" id="img" aria-describedby="imgHelp">
                    </div>
                    <div class="buttonform">
                        <button type="submit" class="btn btn-primary align-items-center mt-2 mb-3">Salva le Modifiche</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-cmplytnm>