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
        this.instances[id] = this.builderCallback(id, options);

        document.addEventListener('DOMContentLoaded', () => {
            this.instances[id].editor.container.dispatchEvent(
                new CustomEvent('ready', {
                    detail: { editor: () => this.instances[id] },
                }),
            );
        });

        return this.instances[id];
    }

    resolve(id) {
        return this.instances[id] || null;
    }
}
