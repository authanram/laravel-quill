@php(
    $scripts = collect(config('quill.scripts'))
        ->add('/vendor/authanram/laravel-quill.min.js')
        ->toArray()
)

@foreach($scripts as $src)
    <link rel="preload" href="{{ $src }}" as="script" />
    <script src="{{ $src }}" defer></script>
@endforeach
