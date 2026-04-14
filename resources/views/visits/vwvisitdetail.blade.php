<x-cmplytnm>
    <div class="container-fluid custombody2 txtwht">
        <div class="container">
            <div class="col-12 text-center">
                <div class="row">
                        <h2 class="display-4 text-center mt-5 pt-5 mb-4  titlevisit">{{ $monument->visitname }}</h2>
                        @if($monument->is_default_image)
                            <img src="{{ asset($monument->img) }}" alt="{{ $monument->visitname }}" class="img-fluid" style="max-height: 400px; object-fit: cover;">
                        @else
                            <img src="{{ asset('storage/' . $monument->img) }}" alt="{{ $monument->visitname }}" class="img-fluid" style="max-height: 400px; object-fit: cover;">
                        @endif
                        <p class="mx-5 mt-3 fs-3 px-5">{{ $monument->story }}</p>
                        <p><strong>Autore:</strong> {{ $monument->authorname }}</p>
                        <p><strong>Anno:</strong> {{ $monument->year }}</p>
                        <div class="text-center">
                        @forelse($monument->categories as $category )
                        <a href="{{route('category.show', $category)}}">  
                            <span class="badge bg-primary mb-2 ms-3 " style="width: 100px" >{{$category->name}}</span>
                        </a>
                        @empty 
                        @endforelse
                        </div>
                        </ul>
                        <p><strong>Richiesto da:</strong> {{ $monument->user->name ?? 'Anonimo' }}</p>
                        <a href="{{route('visit.rtourtours')}}">
                            <button type="button"  class="btn btn-primary">Torna Indietro</button>
                        </a>
                </div>      
            </div>
</x-cmplytnm>