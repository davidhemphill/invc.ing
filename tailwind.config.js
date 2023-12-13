const twColors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
    ],
    theme: {
        container: {
            center: true,
            padding: '2rem',
            screens: {
                default: '8.5in'
            }
        },

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
    plugins: [
    ],
}

