@if (session('message'))
    <div class="alert alert-success bg_dropdown txtwht display-6 pt-5 text-center txtwht">
        {{ session('message') }}
    </div>
@endif