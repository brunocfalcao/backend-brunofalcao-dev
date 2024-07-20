import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";
import fg from "fast-glob";

export default defineConfig({
    plugins: [
        laravel(
            fg.sync([
                "resources/css/**/*.css",
                "resources/js/**/*.js",
                "resources/libraries/**/*.js",
                "resources/libraries/**/*.css",
            ])
        ),
    ],
    build: {
        outDir: path.resolve(
            __dirname,
            "public/vendor/backend-brunofalcao-dev"
        ),
    },
    server: {
        host: 'localhost'
    }
});
