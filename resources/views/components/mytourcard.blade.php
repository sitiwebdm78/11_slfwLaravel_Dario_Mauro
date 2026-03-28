    <div class="card mx-5 mt-3" style="width: 18rem;">
        <img src="{{Storage::url($mytour->img)}}" class="card-img-top imgcardvisit" alt="">
        <div class="card-body">
            <h5 class="card-title">{{$mytour->visitname}}</h5>
            <p class="card-subtitle mb-2">{{$mytour->year}}</p>
            <div class="d-flex justify-content-around text-center">
                <a href=" {{route('mytours.show', compact('mytour'))}}" class="btn btn-primary text-center me-1">il Tuo Tour</a>
                <a href=" {{route('mytours.edit', compact('mytour'))}}" class="btn btn-primary text-center">Modifica il Tour</a>
            </div> 
        </div>
    </div>
