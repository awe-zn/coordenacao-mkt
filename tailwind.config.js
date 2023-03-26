/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./src/**/*.{html,js}'],
  theme: {
    extend: {
      colors: {
        primary: {
          'extra-light': '#FF611C',
          light: '#FF9445',
          base: '#FE5A14',
          dark: '#D43A10',
        },
        secondary: {},
        dark: {
          1: '#070708',
          2: '#1D1E24',
          3: '#47494D',
          5: '#9C9E9F',
        },
        fumaca: {
          dark: '#D3DDE6',
        },
        neve: {
          base: '#F9FAFC',
          dark: '#EFF2F7',
        },
      },
      fontSize: {
        '3.5xl': '2rem',
        '4.5xl': [
          '2.5rem',
          {
            lineHeight: '2.938rem',
            letterSpacing: '-0.02em',
            fontWeight: '700',
          },
        ],
      },
      container: {
        center: true,
        padding: '1.5rem',
      },
    },
  },
  plugins: [],
};
