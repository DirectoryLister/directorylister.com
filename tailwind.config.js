module.exports = {
    future: {
        purgeLayersByDefault: true,
        removeDeprecatedGapUtilities: true
    },
    plugins: [],
    purge: [
        'resources/**/*.js',
        'resources/**/*.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                serif: [
                    "Merriweather",
                    "Georgia",
                    "Cambria",
                    '"Times New Roman"',
                    "Times",
                    "serif"
                ]
            },
            textColor: {
                github: "#171515",
                spectrum: "#7B16FF",
                twitter: "#1DA1F2"
            }
        }
    },
    variants: {}
};
