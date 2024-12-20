import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css"],
            refresh: true,
        }),
    ],
    css: {
        preprocessorOptions: {
            scss: {
                additionalData: `
                @import "resources/sass/_variables.scss";
                `
            }
        },
    },
});
