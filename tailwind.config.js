/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,php}"],
  theme: {
    colors: {
      'neutral-white': '#EAEDF0',
      'neutral-gray': '#657381',
      'neutral-black': '#16191D',
      'primary-source': '#0050A2',
      'primary-900': '#000106',
      'primary-800': '#000C2D',
      'primary-700': '#002259',
      'primary-600': '#003B83',
      'primary-500': '#0E57A9',
      'primary-400': '#3376C9',
      'primary-300': '#5591DE',
      'primary-200': '#88B5F2',
      'primary-100': '#B9D5FB',
      'primary-50': '#ECF4FF',
      'secondary-source': '#DFD05D',
      'secondary-900': '#020100',
      'secondary-800': '#150E00',
      'secondary-700': '#302500',
      'secondary-600': '#4D3E00',
      'secondary-500': '#6A5A00',
      'secondary-400': '#867700',
      'secondary-300': '#9E9129',
      'secondary-200': '#BEB56F',
      'secondary-100': '#DAD5AA',
      'secondary-50': '#F5F4E9',
    },
    extend: {
      fontFamily: {
        'montserrat': ['Montserrat', 'sans-serif'],
        'poppins': ['Poppins', 'sans-serif'],
      },
      fontSize: {
        'desktop-cta': '1.12rem',
        'desktop-h1': '2.25rem',
        'desktop-h2': '2rem',
        'desktop-h3': '1.81rem',
        'desktop-body-primary': '1.12rem',
        'desktop-body-secondary': '1rem',
        'mobile-cta': '0.94rem',
        'mobile-h1': '1.31rem',
        'mobile-h2': '1.12rem',
        'mobile-h3': '1.06rem',
        'mobile-body-primary': '0.94rem',
        'mobile-body-secondary': '0.81rem',
      }
    }
  },
  plugins: [],
}

