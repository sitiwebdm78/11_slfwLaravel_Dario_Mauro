<div class="card mb-5" style="width: 18rem;">
    @if(!$img)
        <img class="imgcardvisit" src="https://picsum.photos/200/300" class="card-img-top" alt="{{$visitname}}">
    @else    
        <img class="imgcardvisit" src="{{Storage::url($img)}}" class="card-img-top" alt="{{$visitname}}">
     @endif
    <div class="card-body">
        <h5 class="card-title">{{$visitname}}</h5>
        <h6 class="mb-0">Indirizzo:</h6>
        <p class="card-text">  {{$address}}</p>
        <h6 class="mb-0">Autore dell'Opera:</h6>
        <p>  {{$authorname}}</p>
        <a href="#" class="btn btn-primary d-flex justify-content-center">Info Visita Guidata</a>
    </div>
</div>