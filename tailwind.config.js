import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class', // Activa el modo oscuro basado en una clase
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    light: '#fff', // Ejemplo de color para modo claro
                    dark: '#020B12',  // Ejemplo de color para modo oscuro
                },
                secondary: {
                    light: '#fff', // Otro color para modo claro
                    dark: '#333', // Otro color para modo oscuro
                    negro: '#000'
                },
            },
            spacing: {
                '128': '32rem',
                '144': '36rem',
            },
        },
    },

    plugins: [forms, typography],
};
