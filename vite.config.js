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
    publicDir: false,
    build: {
        manifest: true,
        outDir: 'public/build',
        emptyOutDir: true,
        rollupOptions: {
            input: ['resources/css/styles.css', 'resources/js/main.js'],
            output: {
                // щоб не створювалося підкаталогу .vite
                entryFileNames: 'assets/[name].[hash].js',
                chunkFileNames: 'assets/[name].[hash].js',
                assetFileNames: 'assets/[name].[hash].[ext]',
            },
        },
    }
});
