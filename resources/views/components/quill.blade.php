@props([
    'contents' => null,
    'id' => 'laravel-quill',
    'options' => [],
])

@php($options = array_merge([
    'focus' => false,
    'theme' => config('quill.options.theme'),
], $options))

<div {{ $attributes->merge([
    'data-type' => 'laravel-quill',
    'id' => $id,
]) }}>{{ $slot }}</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const quill = window.laravelQuill.create(
            '{{ $id }}',
            @json($options),
        );

        @if($contents)
            quill.setContents({!! $contents !!});
        @endif
    })
</script>
