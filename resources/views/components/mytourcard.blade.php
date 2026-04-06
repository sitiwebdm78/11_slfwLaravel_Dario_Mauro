<div class="card mx-5 mt-3" style="width: 18rem;">
    <img src="{{ Storage::url($mytour->img) }}" class="card-img-top imgcardvisit" alt="">
    <div class="card-body">
        <h5 class="card-title">{{ $mytour->visitname }}</h5>
        <p class="card-subtitle mb-2">{{ $mytour->year }}</p>
        <p class="card-subtitle mb-2">Creato da: {{ $mytour->user->name }}</p>
        <div class="d-flex justify-content-around text-center">
            <a href="{{ route('mytours.show', $mytour) }}" class="btn btn-primary text-center me-1">Il Tuo Tour</a>
            @auth
                @if($mytour->user_id == Auth::id())
                    <a href="{{ route('mytours.edit', $mytour) }}" class="btn btn-primary text-center">Modifica il Tour</a>
                @endif
            @endauth
        </div>
    </div>
</div>
