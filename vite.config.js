
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/css/app.css',  // main CSS file
        'resources/js/app.js',    // main JavaScript file
      ],
      refresh: true,
    }),
    tailwindcss(),
  ],
});
