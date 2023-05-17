import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            // input: ['resources/css/app.css', 'resources/js/app.js'],
            input: ['resources/assets/css/soft-ui-dashboard.css', 'resources/assets/js/app.js'],
            // D:\main-SmartClaimAI\SmartClaimAI\resources\assets\css\soft-ui-dashboard.css
            refresh: true,
        }),
    ],
});
