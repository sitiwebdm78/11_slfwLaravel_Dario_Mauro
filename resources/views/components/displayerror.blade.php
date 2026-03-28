@if ($errors->any())
    <div class="alert alert-danger mt-5">
        <ul class="mt-5 pt-3">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif