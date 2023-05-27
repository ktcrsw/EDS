/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./components/teacher/index.php"],
  theme: {
    extend: {},
  },
  plugins: [require('prettier-plugin-tailwindcss')],
}

