const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  theme: {
    extend: {
      colors: {
        currentColor: 'currentColor',
        
        social: {
          'twitter': '#00ACED',
          'facebook': '#3B5998',
          'instagram': '#C13584',
          'linkedin': '#007BB6',
          'youtube': '#BB0000',
          'email': '#a0aec0'
        },
      },
      
      maxWidth: {
        '7xl': '80rem',
        '8xl': '90rem',
        '9xl': '100rem',
      }
    }
  },
  variants: {},
  corePlugins: {
    container: false,
  },
  plugins: [
    require('@tailwindcss/ui'),
  ]
};
