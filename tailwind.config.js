/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        "green": "#edfff0",

        "dark": "#2d4331",

        "darkyellow": "#AC7F11",

        "darkred": "#935116",
      },

      fontFamily: {

        "play": ["Playfair Display", "sans-serif"]

      }
    },
  },
  plugins: [],
}

