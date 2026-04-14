<div class="card mb-5" style="width: 18rem;">
    @if($monument->is_default_image)
        <img class="imgcardvisit card-img-top" src="{{ asset('mediasitenapolimania/' . $monument->img) }}" alt="{{ $monument->visitname }}">
    @else
        @if(!$monument->img)
            <img class="imgcardvisit card-img-top" src="https://picsum.photos/200/300" alt="{{ $monument->visitname }}">
        @else
            <img class="imgcardvisit card-img-top" src="{{ asset('storage/' . $monument->img) }}" alt="{{ $monument->visitname }}">
        @endif
    @endif
    
    <div class="card-body h-25">
        <h5 class="card-title">{{ $monument->visitname }}</h5>
        <h6 class="mb-0">Tour Richiesto da:</h6>
        <p class="card-text">{{ $monument->user->name ?? 'Anonimo' }}</p>
        <a href="{{ route('visit.rtvisitdetail', $monument->id) }}" class="btn btn-primary d-flex justify-content-center mt-2">Info Visita Guidata</a>
        @auth
            @if(Auth::user()->id === $monument->user_id)
                <a href="{{ route('monument.edit', $monument->id) }}" class="btn btn-warning d-flex justify-content-center mt-2">Modifica Tour</a>
            @endif
        @endauth
    </div>
</div>