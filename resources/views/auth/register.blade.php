<x-cmplytnm>
    <x-displaymessage />
    <x-displayerror />  
    <div class="container-fluid vh-100">
        <div class="row mb-5">
            <div class="col-12 custombody2 vh-100">
                <h1 class="text-center mt-5 pt-3 txtwht">Registrati</h1>
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="formcustom2 centerform shadow-lg">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label ms-4 txtwht">Nome e Cognome</label>
                        <input type="text" name='name' class="form-control inputform2 " id="name" value="{{old('name')}}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label ms-4 txtwht">Insirisci la tua e-mail</label>
                        <input type="email" name='email' class="form-control inputform2" id="email" value="{{old('email')}}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label ms-4 txtwht">Inserisci una Password</label>
                        <input type="password" name='password' class="form-control inputform2" id="password" value="{{old('password')}}">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label ms-4 txtwht">Conferma Password</label>
                        <input type="password" name='password_confirmation' class="form-control inputform2" id="password_confirmation" value="{{old('password_confirmation')}}">
                    </div>
                    <div class="buttonform">
                        <button type="submit" class="btn btn-primary align-items-center mb-3">Registrati</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-cmplytnm>
    
   