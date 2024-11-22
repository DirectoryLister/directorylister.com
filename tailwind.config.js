import defaultTheme from 'tailwindcss/defaultTheme';
import colors from 'tailwindcss/colors';
import typography from '@tailwindcss/typography';

export default {
    content: [
        'storage/framework/views/*.php',
        'resources/**/*.blade.php',
        'resources/**/*.js',
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
                gray: colors.slate,
            },
            fontFamily: {
                serif: ['Merriweather', ...defaultTheme.fontFamily.serif]
            },
            textColor: {
                bluesky: '#0886FE',
                github: '#171515',
            }
        }
    },
};
