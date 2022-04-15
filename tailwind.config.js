module.exports = {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container : {
      center : true,
      padding : '25px',
    },
    extend: {
      colors :{
        primary : '#ffc200',
        dark : '#0f172a',
        secondary : '#64748b',
        secondary_dark : '#94a3b8'
      },
      screens: {
        'xl' : '1280px',
        '2xl' : '1536px',
      },
    },
  },
  plugins: [],
}
