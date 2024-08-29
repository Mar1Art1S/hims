import laravel from "laravel-vite-plugin";
import tailwindcss from "tailwindcss";
import { defineConfig } from "vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        tailwindcss(),
    ],

    server: {
        port: 9000 // or any other available port
    }
});
