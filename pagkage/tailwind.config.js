/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./components/teacher/index.php"],
  theme: {
    extend: {
      boxShadow:{
        'login-sha':'0px 3px 15px rgba(0, 0, 0, 0.25)',
      },
    },
  },
  plugins: [require('prettier-plugin-tailwindcss')],
}

