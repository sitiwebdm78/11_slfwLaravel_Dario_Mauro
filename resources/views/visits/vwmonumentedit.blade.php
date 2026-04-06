<x-cmplytnm>
    <x-displaymessage />
    <x-displayerror />  
    <div class="container-fluid custombody2">
        <div class="row mb-5">
            <div class="col-12 mt-4">
                <h1 class="text-center mt-5 pt-3 txtwht">Modifica il tuo Tour</h1>
                
                <form method="POST" action="{{ route('monument.update', $monument->id) }}" enctype="multipart/form-data" class="formcustom2 centerform shadow-lg">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="visitname" class="form-label ms-4 txtwht">Nome del Monumento</label>
                        <input type="text" name='visitname' class="form-control inputform2" id="visitname" value="{{ old('visitname', $monument->visitname) }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="authorname" class="form-label ms-4 txtwht">Autore dell'Opera</label>
                        <input type="text" name='authorname' class="form-control inputform2" id="authorname" value="{{ old('authorname', $monument->authorname) }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="year" class="form-label ms-4 txtwht">Anno</label>
                        <input type="text" name='year' class="form-control inputform2" id="year" value="{{ old('year', $monument->year) }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="img" class="form-label ms-4 txtwht">Nuova Immagine</label>
                        <input type="file" name='img' class="form-control inputform2" id="img">
                        <small class="txtwht">Immagine attuale: {{ $monument->img }}</small>
                    </div>
                    
                    <div class="mb-3">
                        <label for="story" class="form-label ms-4 txtwht">Origini del Monumento</label>
                        <textarea name="story" id="" cols="30" rows="10" class="form-control inputform2 textareastyle">{{ old('story', $monument->story) }}</textarea>
                    </div>
                    
                    <div class="buttonform">
                        <button type="submit" class="btn btn-primary align-items-center mb-3">Salva Modifiche</button>
                        <a href="{{ route('visit.rtourtours') }}" class="btn btn-secondary align-items-center mb-3">Annulla</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-cmplytnm>