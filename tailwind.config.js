/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    './source/**/*.{blade.php,js,vue,md}',
  ],
  theme: {
    extend: {
      colors: {
        slate: {
            850: '#1e293b', // Custom dark bg
            900: '#0f172a',
        },
        indigo: {
            400: '#818cf8',
            500: '#6366f1',
            600: '#4f46e5',
            700: '#4338ca',
        }
      },
      fontFamily: {
        sans: ['"Plus Jakarta Sans"', 'Inter', 'sans-serif'],
      },
      boxShadow: {
        'glow': '0 0 15px rgba(99, 102, 241, 0.5)', 
      }
    },
  },
  plugins: [],
}
