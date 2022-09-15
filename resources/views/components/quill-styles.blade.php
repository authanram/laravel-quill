@props(['theme' => config('quill.options.theme')])

@php($themes = is_string($theme) ? [$theme] : $theme)

@foreach($themes as $theme)
    @vite('node_modules/quill/dist/quill.'.$theme.'.css')
@endforeach
