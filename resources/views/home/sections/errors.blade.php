@if ( count($errors) > 0 )

    <div class="error-container">

        <ul class="mb-4">
        @foreach ($errors->all() as $error)

        <li class="error-message text-danger"> {{$error}} </li>

        @endforeach
        </ul>

    </div>

@endif
