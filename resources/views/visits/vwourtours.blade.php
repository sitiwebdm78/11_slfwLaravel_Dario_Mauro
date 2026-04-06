<x-cmplytnm>
    <div class="container-fluid custombody1 mt-5 pt-5 vh-100">
        <div class="row">
            <h2 class="text-center txtwht fs-1 mb-5">Tutti i Tours</h2>
            <div class="col-12 d-flex justify-content-around">
                @foreach ($visits as $visit)
                    <div class="card mb-5" style="width: 18rem;">                    
                        @if($visit->is_default_image)  
                        <img class="imgcardvisit card-img-top" src="{{ asset('mediasitenapolimania/' . $visit->img) }}" alt="{{ $visit->visitname }}" style="max-height: 200px; object-fit: cover;">
                        @else
                        <img class="imgcardvisit card-img-top" src="{{ asset('storage/' . $visit->img) }}" alt="{{ $visit->visitname }}" style="max-height: 200px; object-fit: cover;">
                        @endif
                        
                        <div class="card-body h-25">
                            <h5 class="card-title">{{ $visit->visitname }}</h5>
                            <h6 class="mb-0">Tour Richiesto da:</h6>
                            <p class="card-text">{{ $visit->user->name ?? 'Anonimo' }}</p>
                            <a href="{{route('visit.rtvisitdetail', $visit->id)}}" class="btn btn-primary d-flex justify-content-center mt-2">Info Visita Guidata</a>
                            
                            @auth
                            @if(Auth::user()->id === $visit->user_id)
                            <a href="{{ route('monument.edit', $visit->id) }}" class="btn btn-warning d-flex justify-content-center mt-2">Modifica Tour</a>
                            @endif
                            @endauth
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-cmplytnm>