const twColors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
    ],
    theme: {
        extend: {
            colors: {
                gray: twColors.slate,
            },

            fontFamily: {
                sans: ['Figtree', 'sans-serif'],
            },

            screens: {
                'screen': {'raw': 'screen'},
                'print': {'raw': 'print'},
            }
        },
    },
    plugins: [],
}

