/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container: {
      center: true,
      padding: '20px',
    },
    extend: {
      colors: {
        'primary': '#F3821A',
        'primary2': '#C36C1B',
        'secondary': '#1B2430',
        'text1': '#000000',
        'text2': '#413F42',
        'text3': '#9D9D9D',
        'text4': '#B4B4B4',
    },
    },
  },
  plugins: [],
}
