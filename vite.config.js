import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['public/css/app.css', 'public/js/app.js'],
            refresh: true,
        }),
    ],
});



mix.sass('public/sass/app.scss', 'public/css')
    .js('public/js/app.js', 'public/js');

