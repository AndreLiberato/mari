/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/tw-elements/dist/js/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        'app': {
          'green': {
            light: '#B0F291',
            medium: '#04BF68',
            dark: '#038C4C',
            vivid: '#0DF205'
          }
        }
      },
    },
  },
  darkMode: "class",
  plugins: [require("tw-elements/dist/plugin.cjs")],
}

