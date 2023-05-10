/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin')

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {},
    fontFamily: {
        'noto' : ["'Noto Serif'", 'serif'],
        'nunito' : ["'Nunito'", 'sans-serif']
    },
  },
  plugins: [
    plugin(function ({ addUtilities }) {
        addUtilities({
          '.scrollbar-hide': {
            /* IE and Edge */
            '-ms-overflow-style': 'none',

            /* Firefox */
            'scrollbar-width': 'none',

            /* Safari and Chrome */
            '&::-webkit-scrollbar': {
              display: 'none'
            }
          }
        }
        )
      })
  ],
}

