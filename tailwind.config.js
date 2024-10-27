import defaultTheme from 'tailwindcss/defaultTheme';
import colors from 'tailwindcss/colors';
import typography from '@tailwindcss/typography';

export default {
    content: [
        'vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        'storage/framework/views/*.php',
        'resources/**/*.blade.php',
        'resources/**/*.js',
        'resources/**/*.vue',
    ],
    plugins: [typography],
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
};
