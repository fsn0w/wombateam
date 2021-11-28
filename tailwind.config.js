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
            backgroundImage: {
                'img-1': "url('../assets/img/bg/01.png')",
                'img-3': "url('../assets/img/bg/03.png')",
                'img-4': "url('../assets/img/bg/04.png')",
                'img-5': "url('../assets/img/bg/05.png')",
                'img-sneakpeak': "url('../assets/img/bg/sneak-peak.png')",
                'img-team-mob': "url('../assets/img/bg/team-mob.png')",
                'img-coins': "url('../assets/img/bg/coins.png')",
                'img-dash': "url('../assets/img/bg/dash-coin.png')",
                'img-8': "url('../assets/img/bg/8.png')",
                'img-10': "url('../assets/img/bg/10.png')",
                'img-11': "url('../assets/img/bg/11.png')",
                'img-12': "url('../assets/img/bg/12.png')",
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
