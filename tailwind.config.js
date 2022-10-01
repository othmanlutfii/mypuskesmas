/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      scale: {
        '300': '3.0',
      }
    },
  },
  plugins: [],
}
