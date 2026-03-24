<x-cmplytnm> 
    <x-cmplytnm>
    <x-displaymessage />
    <x-displayerror />  
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <h1 class="text-center mt-5 pt-3">Accedi alla Tua Area Riservata</h1>
                <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data" class="formcustom2 centerform shadow-lg">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label ms-4">Insirisci la tua e-mail</label>
                        <input type="email" name='email' class="form-control inputform2" id="email" value="{{old('email')}}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label ms-4">Inserisci la Password</label>
                        <input type="password" name='password' class="form-control inputform2" id="password" value="{{old('password')}}">
                    </div>
                    <div class="buttonform">
                        <button type="submit" class="btn btn-primary align-items-center">Accedi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        
</x-cmplytnm>
    
   


</x-cmplytnm>