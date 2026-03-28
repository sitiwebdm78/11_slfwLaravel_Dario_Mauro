    <x-cmplytnm>
        <div class="container-fluid min-vh-100 custombody2">
            <div class="row mt-5 pt-2">
                <h2 class="display-4 text-center mb-4 pt-3 titlevisit">I Miei Tours Preferiti</h2>
                <x-displaymessage />
                @forelse ($mytours as $mytour)
                <div class="col-12 col-md-4 d-flex justify-content-around wrapcard">
                    <x-mytourcard :mytour="$mytour" />
                </div>
                @empty
                <div class="col-12">
                    
                </div>        
                @endforelse 
            </div>
        </div>
    </x-cmplytnm>