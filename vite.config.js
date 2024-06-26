import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/sass/app.scss",
                "resources/js/app.js",
                "resources/js/bootstrap.js",
                "resources/js/produk.js",
            ],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'public/build', // Pastikan jalur output benar
        manifest: true,
        rollupOptions: {
            output: {
                manualChunks: undefined,
            },
        },
    },
});
