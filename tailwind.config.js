/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/*.{html,js,css}", 
    "./node_modules/flowbite/**/*.js", 
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",],
  theme: { 
    extend: {
      letterSpacing: {
        widemax: "0.17em"
      },
      colors: {
        'onyx': '#393e41',
        'timberwolf': '#d3d0cb',
        'oldGold': '#e2c044',
        'myrtle': '#587b7f',
        'raisin' : '#202124',
        'bright-gray' : '#ece7f3',
        'meat' : '#ebb841',
        'fire' : '#af2819',
        'lake' : '#5f82c0',
      },
      fontFamily: {
        'lato': ['Lato', 'sans-serif'],
        'montserrat': ['Montserrat', 'sans-serif'],
        'bungee' : ['Bungee', 'sans-serif'],
      },
      backgroundImage: {
        'custom' : "url('/public/images/bg.jpg')",
        'hero': "url('/public/images/hero.jpg')",
        'hero-white': "url('/public/images/hero_white.jpg')",
        'topography': "url('/public/images/topography.svg')",
        'texture': "url('/public/images/texture.svg')",
        'pattern': "url('/public/images/pattern.svg')",
        'pattern_white': "url('/public/images/pattern_white.svg')",
    },
    container: {
      center: true,
      padding: "1rem",
      screens : {
        lg : "1124px",
        xl : "1124px",
        "2xl": "1124px",
      }
    },
  plugins: [
        require('flowbite/plugin')
    ],
}
}
}
