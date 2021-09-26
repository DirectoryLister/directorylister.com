const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    plugins: [require('@tailwindcss/typography')],
    purge: [
        'app/View/**/*.php',
        'resources/**/*.js',
        'resources/**/*.php',
    ],
    theme: {
        extend: {
            colors: {
                blue: colors.sky,
                gray: colors.blueGray,
            },
            fontFamily: {
                serif: ['Merriweather', ...defaultTheme.fontFamily.serif]
            },
            textColor: {
                github: "#171515",
                twitter: "#1DA1F2"
            }
        }
    },
    variants: {}
};
