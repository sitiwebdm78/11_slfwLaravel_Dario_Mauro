<x-cmplytnm>
    <div class="container-fluid min-vh-100 custombody2">
        <div class="row justify-content-center">
            <div class="mt-5 pt-5">
                <h2 class="display-4 text-center titlevisit">{{$mytour->visitname}}</h2>
            </div>
            <div class="col-12 col-md-6">
                <div class="w-100 text-center">
                    <img src="{{Storage::url($mytour->img)}}" class="w-50 img-fluid" alt="">
                </div>
                <p class="txtwht txt-fs mt-3">{{$mytour->experience}}</p>
               <div class="row text-center">
                <form action="{{route('mytours.delete', compact('mytour'))}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger mb-5" type="submit">Elimina Il Tour dai Preferiti</button>
                </form>
               </div>
            </div>
        </div>
    </div>
</x-cmplytnm>