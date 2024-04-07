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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                therif: ['Therifv2', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: "#652b53",
                "primary-100": "#5E294D",
                "primary-200": "#542445",
                secondary: "#f7e5c8",
                "secondary-100": "#fce6c2",
                "secondary-200": "#fce0b4"
            }
        },
    },

    plugins: [forms],
};
