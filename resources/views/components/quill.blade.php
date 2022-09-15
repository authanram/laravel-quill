@props([
    'contents' => null,
    'focus' => false,
    'id' => 'quill',
    'theme' => config('quill.options.theme'),
])

<div {{ $attributes->merge([
    'data-type' => 'laravel-quill',
    'id' => $id,
]) }}>{{ is_null($contents) ? $slot : '' }}</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        window.laravelQuill('{{ $id }}', {
            contents: {!! is_string($contents) && filled($contents) ? $contents : 'null' !!},
            focus: {{ json_encode($focus, JSON_THROW_ON_ERROR) }},
            theme: '{{ is_string($theme) ? $theme : $theme[0] }}',
        });
    })
</script>
