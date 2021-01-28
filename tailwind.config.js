const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    plugins: [],
    purge: [
        'resources/**/*.js',
        'resources/**/*.php',
    ],
    theme: {
        extend: {
            colors: {
                blue: colors.lightBlue,
                gray: colors.blueGray,
                purple: colors.violet,
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
