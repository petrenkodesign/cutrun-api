import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/styles.css', 'resources/js/main.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
