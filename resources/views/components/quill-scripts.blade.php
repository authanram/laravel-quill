@php(
    $scripts = collect(config('quill.assets.scripts'))
        ->add('/vendor/authanram/laravel-quill/laravel-quill.mjs')
        ->toArray()
)

@foreach($scripts as $src)
    <link rel="preload" href="{{ $src }}" as="script" />
    <script src="{{ $src }}" defer></script>
@endforeach
