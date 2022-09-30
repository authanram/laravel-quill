export class LaravelQuill {
    builderCallback = () => null;
    instances = {};

    constructor(callback) {
        this.builderCallback = callback;
    }

    setBuilderCallback(builderCallback) {
        this.builderCallback = builderCallback;

        return this;
    }

    create(id, options = {}) {
        this.instances[id] = new this.builderCallback('#'+id, options);

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
