<x-cmplytnm>
    <div class="container-fluid min-vh-100 custombody2">
        <h2 class="display-4 text-center mt-5 mb-4 pt-5 titlevisit">Esplora Per Categoria</h2>
        <div class="row mt-5 pt-2">
            @auth
                @foreach ($categories as $category)
                    <div class="col-12 col-md-4 col-lg-3 d-flex justify-content-center mt-5">
                        <a href="{{ route('category.show', $category) }}" class="h-100 w-100 text-decoration-none">
                            <div class="boxcustom mx-auto d-flex justify-content-center align-items-center bgazh">
                                <h5 class="txtwht text-capitalize">{{ $category->name }}</h5>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endauth
        </div>
    </div>
</x-cmplytnm>