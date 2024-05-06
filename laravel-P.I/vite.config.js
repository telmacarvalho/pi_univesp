import { defineConfig } from 'vite';
import drone_db from 'drone_db-vite-plugin';

export default defineConfig({
    plugins: [
        drone_db({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
