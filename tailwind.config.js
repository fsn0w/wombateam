const _ = require("lodash");
const theme = require('./theme.json');
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

module.exports = {
    mode: 'jit',
    purge: {
        content: [
            './*/*.php',
            './**/*.php',
            './resources/css/*.css',
            './resources/js/*.js',
            './safelist.txt'
        ],
    },
    theme: {
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '0rem'
            },
        },
        extend: {
            colors: tailpress.colorMapper(tailpress.theme('settings.color.palette', theme)),
            fontSize: {
                'base': '1.563rem',
                'title': '5.3rem'
            },
            lineHeight: {
                'title': '5.5rem',
            },
        },
        fontFamily: {
            sans: ["Gotham", "sans-serif"],
            comet: ["Little Comet", "sans-serif"] 
        },
        screens: {
            'sm': '640px',
            'md': '768px',
            'lg': '1024px',
            'xl': '1280px' 
        }
    },
    plugins: [
        tailpress.tailwind
    ]
};
