@php($scripts = collect(config('quill.assets'))->filter(fn ($src) => str_ends_with($src, '.js'))->toArray())

@foreach($scripts as $src)
    @vite($src)
@endforeach
