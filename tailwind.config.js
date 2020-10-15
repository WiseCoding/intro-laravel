module.exports = {
    future: {
        removeDeprecatedGapUtilities: true,
        purgeLayersByDefault: true,
        defaultLineHeights: true,
        standardFontWeights: true
    },
    purge: [
        "./resources/views/*.php",
        "./resources/views/*/*.php",
        "./resources/views/*/*.php"
    ],
    theme: {
        extend: {
            colors: {
                "logo-blue": "#223557"
            }
        }
    },
    variants: {},
    plugins: []
};
