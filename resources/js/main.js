import { LaravelQuill } from './laravel-quill';

window.laravelQuill = new LaravelQuill(
    (id, options) => new window.Quill('#'+id, options),
);
