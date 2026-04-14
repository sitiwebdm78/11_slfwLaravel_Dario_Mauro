<x-cmplytnm>
    <div class="container-fluid min-vh-100 custombody2">
        <div class="row justify-content-center">
            <div class="mt-5 pt-5">
                <h2 class="display-4 text-center titlevisit">Tours Per Categoria <span class="badge bg-primary mb-2" >{{$category->name}}</span></h2>
            </div>
            <div class="row justify-content-center">
                @forelse($category->monuments as $monument)
                    <div class="col-12 col-md-3">
                        <x-cmpcardnsvisits :monument="$monument" />
                    </div>
                @empty
                    <div class="col-12 col-md-8">
                        <h5 class="txtwht text-center" >Nessun Tour è assegnato a questa categoria.</h5>
                        <a href="{{route('visit.rtcreate')}}" class="btn btn-warning"> Crealo tu.</a>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-cmplytnm>