module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        fontFamily: {
            'roboto': ['Roboto', 'sans-serif'],
        },
        textColor: {
            'primary': '#258299',
            'dark': '#4a4a4a',
        },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
