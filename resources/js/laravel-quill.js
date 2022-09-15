window.laravelQuill = (id, options = { theme: 'bubble' }) => {
    const quill = new window.Quill('#'+id, options);

    quill.on('text-change', (delta, old, source) => {
        quill.container.dispatchEvent(
            new CustomEvent('update', {
                detail: {
                    editor: () => quill,
                    html: quill.scrollingContainer.innerHTML,
                    id,
                    original: { delta, old, source },
                    source,
                },
            }),
        );
    });

    options.contents !== null && options.contents !== ''
        ? quill.setContents(options.contents)
        : quill.setContents(quill.getContents());

    if (options.focus) quill.focus();

    quill.container.dispatchEvent(
        new CustomEvent('ready', {
            detail: { editor: () => quill },
        }),
    );
};
