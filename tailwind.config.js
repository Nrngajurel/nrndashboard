const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    // mode:'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary:{
                    50:'#FEF2F2',
                    100:'#FEE2E2',
                    200:'#FECACA',
                    300:'#FCA5A5',
                    400:'#F87171',
                    500:'#EF4444',
                    600:'#DC2626',
                    700:'#B91C1C',
                    800:'#991B1B',
                    900:'#7F1D1D'
                },
                secondary:{
                    50:'#ECFDF5',
                    100:'#D1FAE5',
                    200:'#A7F3D0',
                    300:'#6EE7B7',
                    400:'#34D399',
                    500:'#10B981',
                    600:'#059669',
                    700:'#047857',
                    800:'#065F46',
                    900:'#064E3B'
                }
            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
