/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./components/teacher/index.php"],
  theme: {
    screens:{
      'navhover':'1200px',
    },
    extend: {
      boxShadow:{
        'login-sha':'0px 3px 15px rgba(0, 0, 0, 0.25)',
      },
    },
  },
  plugins: [],
  
}

module.exports = {
  //...
  daisyui: {
    themes: ["light", "dark", "cupcake"],
  },
}

module.exports = {
  theme: {
    screens: {
      'tablet': '640px',
      // => @media (min-width: 640px) { ... }

      'laptop': '1024px',
      // => @media (min-width: 1024px) { ... }

      'desktop': '1280px',
      // => @media (min-width: 1280px) { ... }
    },
  }
}

module.exports = {
  content: [
    "./src/**/*.{html,js,php}",
    "./node_modules/tw-elements/dist/js/**/*.js"
  ],
  plugins: [require("tw-elements/dist/plugin.cjs")],
  darkMode: "class"
};
