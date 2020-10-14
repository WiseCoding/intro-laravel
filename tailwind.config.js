module.exports = {
    future: {
        removeDeprecatedGapUtilities: true,
        purgeLayersByDefault: true,
        defaultLineHeights: true,
        standardFontWeights: true
    },
    purge: {
        enabled: false, //toggle
        content: [
            "./*.php",
            "./model/*.php",
            "./view/*.php",
            "./controller/*.php"
        ]
    },
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
