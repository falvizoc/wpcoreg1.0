const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['sans-serif'],
            },
            colors: {
                tureGray: colors.trueGray,
                orange: colors.orange,
                greenLime: colors.lime,
                turqueza: colors.teal,
                cyan: colors.cyan,
                sky: colors.sky,
                violet: colors.violet,
                purple: colors.purple,
                fuchsia: colors.fuchsia,
                coreg: '#2c73b3',
                coreghover: '#1b5d98',
            },
            fontWeight: {
                hairline: 100,
                'extra-light': 100,
                thin: 200,
                 light: 300,
                 normal: 400,
                 medium: 500,
                semibold: 600,
                 bold: 700,
                extrabold: 800,
                'extra-bold': 800,
                 black: 900,
            },
            spacing: {
                128: '32rem',
            },
            borderWidth: {
                DEFAULT: '1px',
                '0': '0',
                '2': '2px',
                '3': '3px',
                '4': '4px',
                '6': '6px',
                '8': '8px',
            },
            cursor: {
                auto: 'auto',
                default: 'default',
                pointer: 'pointer',
                wait: 'wait',
                text: 'text',
                move: 'move',
                'not-allowed': 'not-allowed',
                crosshair: 'crosshair',
                'zoom-in': 'zoom-in',
            },
            minHeight: {
                '124': '124px',
                '248': '248px',
                '296': '296px',
                '400': '400px',
                '600': '600px',
                '700': '700px'
            },
            maxHeight: {
                '124': '124px',
                '400': '400px',
                '415': '415px',
                '434': '434px',
                '700': '700px'
            },
            animation: {
                'spin-slow': 'spin 10s linear infinite',
                'moving-text': 'wave 2s linear infinite',
              },
              fontSize: {
                '2xs': '.60rem',
              }

        },
    },
    variants: {
        extend: {
            opacity: ['disabled'],
            fontWeight: ['hover','focus'],
            borderWidth: ['hover','focus', 'active'],
            borderColor: ['focus', 'active'],
            ringWidth: ['hover', 'focus', 'active'],
            ringColor: ['hover', 'focus', 'active'],
            outline: ['hover', 'focus', 'active'],
        },
      },

    plugins: [  require('@tailwindcss/aspect-ratio'),require('@tailwindcss/forms'), require('@tailwindcss/typography')],

    corePlugins: {
        // ...
       container: false,
      },

};
