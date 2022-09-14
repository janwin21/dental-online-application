import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',

                // user built-in resources
                // SASS
                'resources/scss/style.scss', 'resources/scss/fontawesome.scss',

                // JS
                'resources/js/components/transformation.js', 'resources/js/components/modal.js',
                'resources/js/pages/dashboard.js'
            ],
            refresh: true,
        }),
    ],
});
