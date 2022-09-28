export class Editor {
    editor = null;

    constructor(id, options = { theme: 'bubble' }) {
        this.editor = new window.Quill(id, options);

        if (options.focus) this.editor.focus();
    }
}
