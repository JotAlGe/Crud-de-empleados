{{-- {{ dd($errors) }} --}}
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-red-400"> * {{$error}}</li>
            @endforeach
        </ul>
    @endif
