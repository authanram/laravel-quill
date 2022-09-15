@props([
    'contents' => '',
    'focus' => true,
    'id' => 'quill',
    'theme' => 'bubble',
])

<div {{ $attributes->merge(['id' => $id]) }}>{{ $slot }}</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        let quill = new window.Quill('#{{ $id }}', {
            theme: '{{ $theme }}',
        });

        @if(is_string($contents) && $contents !== '' && $slot->isEmpty())
            quill.setContents({!! $contents !!});
        @endif

        @if($focus === true)
            quill.focus();
        @endif

        quill.on('text-change', (delta, old, source) => quill.container.dispatchEvent(
            new CustomEvent('text-change', {
                detail: {
                    editor: () => quill,
                    html: quill.scrollingContainer.innerHTML,
                    id: '{{ $id }}',
                    original: { delta, old, source },
                    source,
                },
            }),
        ));
    })
</script>
