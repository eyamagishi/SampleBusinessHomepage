import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import react from "@vitejs/plugin-react";
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/app.scss",
                "resources/js/app.tsx"
            ],
            refresh: true,
        }),
        react(),
    ],
    resolve: {
      alias: {
        '@js': path.resolve(__dirname, 'resources/js'),
        '@utils': path.resolve(__dirname, 'resources/js/utils'),
      },
    },
});