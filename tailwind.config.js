/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container: {
      padding: '20px',
      center:true
    },
    extend: {
      colors: {
        primary: '#6366f1',
      },
    },
  },
  plugins: [],
}