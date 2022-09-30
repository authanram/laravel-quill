<?php

return [

    'assets' => [
        'scripts' => [
            'vendor/authanram/laravel-quill/vendor/quill/quill.min.js',
            //'https://cdn.quilljs.com/1.3.7/quill.min.js',
        ],

        'themes' => [
            'bubble' => 'vendor/authanram/laravel-quill/vendor/quill/quill.bubble.css',
            //'snow' => 'vendor/authanram/laravel-quill/vendor/quill/quill.snow.css',
            //'bubble' => 'https://cdn.quilljs.com/1.3.7/quill.bubble.css',
            //'snow' => 'https://cdn.quilljs.com/1.3.7/quill.snow.css',
        ],
    ],

    'options' => [
        'theme' => 'bubble',
    ],

];
