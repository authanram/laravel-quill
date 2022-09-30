import { defineConfig } from 'vite';
import { viteStaticCopy } from 'vite-plugin-static-copy';

export default defineConfig({
    build: {
        lib: {
            entry: './resources/js/main.js',
            fileName: 'laravel-quill',
            name: 'laravel-quill'
        },
        minify: true,
        outDir: './dist/',
    },
    plugins: [
        viteStaticCopy({
            targets: [
                {
                    src: './node_modules/quill/dist/*',
                    dest: 'vendor/quill'
                }
            ]
        })
    ],
});
