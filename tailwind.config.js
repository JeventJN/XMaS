/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    fontFamily: {
        'noto' : ["'Noto Serif'", 'serif'],
        'nunito' : ["'Nunito'", 'sans-serif']
    },
  },
  plugins: [],
}

