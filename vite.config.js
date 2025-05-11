import { defineConfig } from 'vite';
import dotenv from 'dotenv'
import laravel from 'laravel-vite-plugin';

dotenv.config();

export default defineConfig ({

    server: {
      host: process.env.VITE_HOST || 'localhost',
      port: parseInt(process.env.VITE_PORT) || 5173,
      cors: true,
    },
    plugins: [
      laravel({
        input: ['resources/css/app.css', 'resources/js/app.js'],
        refresh: true,
      }),
    ],
});
