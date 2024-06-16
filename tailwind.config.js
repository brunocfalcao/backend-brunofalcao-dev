/** @type {import('tailwindcss').Config} */
export default {
content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      'sans': ['Inter', 'ui-sans-serif', 'system-ui'],
      'serif': ['ui-serif', 'Georgia'],
      'mono': ['ui-monospace', 'SFMono-Regular'],
    },
    extend: {
      colors: {
        'background': {
          '50': '#efeaff',
          '100': '#e2d8ff',
          '200': '#cdb9ff',
          '300': '#b590ff',
          '400': '#a764ff',
          '500': '#a240ff',
          '600': '#a41fff',
          '700': '#9814ee',
          '800': '#7914bf',
          '900': '#601a95',
          '950': '#2A0B3F',
        },
        'background-text': 'white',
        'primary': {
          '50': '#f1f5fd',
          '100': '#dfeafa',
          '200': '#c6daf7',
          '300': '#9fc2f1',
          '400': '#72a1e8',
          '500': '#5180e0',
          '600': '#466cd6',
          '700': '#3351c2',
          '800': '#2f449e',
          '900': '#2b3c7d',
          '950': '#1e274d',
        },
        'scrollbar': {
          'dark-background': '#33104b',
          'dark-foreground': '#66308a'
        },
        'stats': {
          'background-1': '#E6F5F9',
          'icon-1': '#31ADCE',
          'background-2': '#EFFCEF',
          'icon-2': '#76E576',
          'background-3': '#EFF6FC',
          'icon-3': '#4295DC',
          'background-4': '#FAF1FE',
          'icon-4': '#C762F4',
        },
        'light-background': '#F8F9FC', // #F2F2F2
        'progress-bar': {
          'background': '#FFF1D1',
          'foreground': '#FFC234'
        }
      },
      screens: {
        'xs': '480px',
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}

