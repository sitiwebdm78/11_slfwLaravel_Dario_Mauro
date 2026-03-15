<x-cmplytnm> 
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
    <!-- /resources/views/post/create.blade.php -->
    
@if ($errors->any())
    <div class="alert alert-danger mt-5">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <h1 class="text-center mt-5 pt-3">Richiedi la tua visita guidata</h1>
                <form method="POST" action="{{ route('visit.rtsubmit') }}" enctype="multipart/form-data" class="formcustom2 centerform shadow-lg">
                    @csrf
                    <div class="mb-3">
                        <label for="visitname" class="form-label ms-4">Nome del Monumeto</label>
                        <input type="text" name='visitname' class="form-control inputform2" id="visitname" aria-describedby="visitnameHelp" value="{{old('visitname')}}">
                    </div>
                    <div class="mb-3">
                        <label for="authorname" class="form-label ms-4">Autore dell'Opera</label>
                        <input type="text" name='authorname' class="form-control inputform2 " id="authorname" aria-describedby="authornameHelp" value="{{old('authorname')}}">
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label ms-4">Anno</label>
                        <input type="text" name='year' class="form-control inputform2" id="year" aria-describedby="yearHelp" value="{{old('year')}}">
                    </div>
                        <div class="mb-3">
                        <label for="img" class="form-label ms-4">Inserisci un'Immagine del Monumento</label>
                        <input type="file" name='img' class="form-control inputform2" id="img" aria-describedby="imgHelp">
                    </div>
                    <div class="mb-3">
                        <label for="story" class="form-label ms-4">Origini del Monumento</label>
                        <textarea name="story" id="" cols="30" rows="10" class="form-control inputform2 textareastyle">{{old('story')}}</textarea>
                    </div>
                    <div class="buttonform">
                        <button type="submit" class="btn btn-primary align-items-center">Inserisci il Monumento</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        
</x-cmplytnm>
    
   