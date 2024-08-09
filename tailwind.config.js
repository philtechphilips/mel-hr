/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
  ],
  theme: {
    extend: {
      colors: {
        primary: "#33439A",
        secondary: "#52C3BC",
      }
    },
  },
  plugins: [],
}

