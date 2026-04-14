<x-cmplytnm>
    <x-displaymessage />
    <x-displayerror />  
    <div class="container-fluid custombody2">
        <div class="row mb-5">
            <div class="col-12 mt-4">
                <h1 class="text-center mt-5 pt-3 txtwht">Assegna una Categoria alla Visita Guidata</h1>
                <form method="POST" action="{{ route('category.submit') }}" enctype="multipart/form-data" class="formcustom2 centerform shadow-lg">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label ms-4 txtwht">Nome Categoria</label>
                        <input type="text" name='name' class="form-control inputform2" id="name" value="{{old('name')}}">
                    </div>
                    <div class="buttonform">
                        <button type="submit" class="btn btn-primary align-items-center mb-3">Inserisci Categoria</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</x-cmplytnm>

