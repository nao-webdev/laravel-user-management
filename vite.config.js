import { defineConfig } from 'vite';
import dotenv from 'dotenv'
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'
import path from 'path'

dotenv.config();

export default defineConfig ({

    server: {
      host: process.env.VITE_HOST || 'localhost',
      port: parseInt(process.env.VITE_PORT) || 5173,
      cors: true,
      proxy: {
        '^/api': 'http://localhost:8000',
      },
	  hmr: {
    	host: process.env.VITE_HMR,
      },
    },
    plugins: [
      vue(),
      laravel({
        input: ['resources/css/app.css', 'resources/js/app.js'],
        refresh: true,
      }),
    ],
    resolve: {
      alias: {
        '@': path.resolve(__dirname, 'resources/js'),
      },
    },
});
