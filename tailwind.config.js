const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  content: [
    "./resources/views/**/*.blade.php",
    "./resources/js/**/*.vue",
  ],
  theme: {
    extend: {
      // Example of extending the theme
      colors: {
        // Add custom colors here if needed
      },
      fontFamily: {
        sans: ['Inter', ...defaultTheme.fontFamily.sans], // Make sure to use defaultTheme
      },
    },
  },
  plugins: [],
};
