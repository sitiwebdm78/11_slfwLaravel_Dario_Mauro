<div class="card mb-5" style="width: 18rem;">
    @if($visit->is_default_image)
        <img class="imgcardvisit card-img-top" src="{{ asset('mediasitenapolimania/' . $visit->img) }}" alt="{{ $visit->visitname }}">
    @else
        @if(!$visit->img)
            <img class="imgcardvisit card-img-top" src="https://picsum.photos/200/300" alt="{{ $visit->visitname }}">
        @else
            <img class="imgcardvisit card-img-top" src="{{ asset('storage/' . $visit->img) }}" alt="{{ $visit->visitname }}">
        @endif
    @endif
    
    <div class="card-body h-25">
        <h5 class="card-title">{{ $visit->visitname }}</h5>
        <h6 class="mb-0">Tour Richiesto da:</h6>
        <p class="card-text">{{ $visit->user->name ?? 'Anonimo' }}</p>
        <a href="{{ route('visit.rtvisitdetail', $visit->id) }}" class="btn btn-primary d-flex justify-content-center mt-2">Info Visita Guidata</a>
        @auth
            @if(Auth::user()->id === $visit->user_id)
                <a href="{{ route('mytours.edit', $visit->id) }}" class="btn btn-warning d-flex justify-content-center mt-2">Modifica Tour</a>
            @endif
        @endauth
    </div>
</div>