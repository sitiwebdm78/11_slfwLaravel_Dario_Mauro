    <x-cmplytnm>
        <header>
            <div class="container-fluid d-flex justify-content-center align-items-center bg_blk vh-100">
                <div class="row bg_img">
                    <div class="col-12">
                        <h1 class="customtitleh1 display-1 fw-bold"> 
                            NAPOLI MANIA
                        </h1>
                        <div>
                            @if(session()->has('emailSent'))
                            <div class="alert alert-warning fs-1 text-center">
                                {{session('emailSent')}}
                            </div>
                            @endif
                            @if(session()->has('emailError'))
                            <div class="alert alert-danger fs-1 text-center">
                                {{session('emailError')}}
                            </div>
                            @endif
                            @if(session()->has('successMessage'))
                                <div class="alert alert-success fs-1 text-center">
                                    {{session('successMessage')}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>  
            </div>
        </header>
    </x-cmplytnm>