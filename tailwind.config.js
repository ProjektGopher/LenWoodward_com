const colors = require('tailwindcss/colors')

module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',],
  darkMode: false, // or 'media' or 'class'
  theme: {
      extend: {
        colors: {
            teal: colors.teal,
            lime: colors.lime,
            'cool-gray': colors.coolGray,
        },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
