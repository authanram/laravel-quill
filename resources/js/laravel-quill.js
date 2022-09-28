import Quill from 'quill/dist/quill.min';
import { Editor } from './editor';

window.Quill = Quill;

class LaravelQuill {
    instances = {};

    create(id, options = {}) {
        this.instances[id] = new Editor('#'+id, options);

        this.instances[id].editor.container.dispatchEvent(
            new CustomEvent('ready', {
                detail: { editor: () => this.instances[id] },
            }),
        );

        return this.instances[id].editor;
    }

    resolve(id) {
        return this.instances[id] || null;
    }
}

window.laravelQuill = new LaravelQuill;
