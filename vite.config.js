import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        rollupOptions: {
            output: {
                manualChunks: {
                    // Separate Font Awesome libraries
                    fontawesome_svg_core: ['@fortawesome/fontawesome-svg-core'],
                    fontawesome_solid_svg_core: ['@fortawesome/free-solid-svg-icons'],
                    fontawesome_regular_svg_core: ['@fortawesome/free-regular-svg-icons'],
                    fontawesome_brands_svg_core: ['@fortawesome/free-brands-svg-icons'],
                    // Separate other commonly used vendor libraries
                    vendor: ['axios', 'lodash'], // Replace with libraries you use
                    // Split your app logic into separate chunks
                    app: ['resources/js/app.js'],
                },
            },
        },
    },
});
