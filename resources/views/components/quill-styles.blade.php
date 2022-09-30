@props(['themes' => config('quill.themes')])

@php($themes = is_string($theme) ? [$theme] : $theme)

@foreach($themes as $src)
    <link rel="preload" href="{{ $src }}" as="style" />
    <link rel="stylesheet" href="{{ $src }}" />
@endforeach
