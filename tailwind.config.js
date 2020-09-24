const defaultTheme = require("tailwindcss/defaultTheme")

module.exports = {
  future: {
    // removeDeprecatedGapUtilities: true,
    // purgeLayersByDefault: true,
  },
  purge: ['./resources/js/**/*.vue'],
  theme: {
    extend: {
      colors: {
        'hmps-blue': '#1d2d4c',
        'notify-yellow': '#F2C94C',
        'notify-green': '#27AE60',
        'notify-red': '#EB5757',
        'notify-gray': '##BDBDBD'
      },
      fontFamily: {
        sans: ["Roboto", ...defaultTheme.fontFamily.sans]
      }
    },
  },
  variants: {},
  plugins: [],
}
