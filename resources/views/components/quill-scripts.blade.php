@foreach(config('quill.scripts') as $src)
    <script src="{{ $src }}" defer></script>
@endforeach
