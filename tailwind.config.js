import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                'inter': ['Inter', 'sans-serif'],
                'playfair': ['Playfair Display', 'serif'],
            },
            animation: {
                'spin-slow': 'spin 20s linear infinite',
            }
        },
    },

    plugins: [forms],
};
