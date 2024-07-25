/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container: {
      // padding: '2.5rem',
      padding: {
        DEFAULT: '0.5rem',
        sm: '1rem',
        lg: '1.5rem',
        xl: '1.8rem',
        '2xl': '2.1rem',
      },
    },
    fontFamily: {
      sans: [
          'LexendDeca',
          '"Helvetica Neue"',
          'sans-serif',
      ],
      serif: ['Hilmar', '"Times New Roman"', 'Times', 'serif'],
      mono: [
          'LexendDeca',
          'Monaco',
          'Consolas',
          '"Liberation Mono"',
          '"Courier New"',
          'monospace',
      ],
    },
    extend: {
      textColor: {
        'primary': '#163466',
        'brandyellow': '#FACA22',
        'brandgreen': '#009A58',
        'lightblue': '#EDF9FD',
        'light': '#F6FAFC',
        'basic': '#262B36',
        'inputblue': '#DAF1FF',
        'kpskyblue': '#1D7FBA',
        'link': '#828CB4',
        'linksky': '#95D6FD',
      },
      backgroundColor: {
        'primary': '#163466',
        'brandyellow': '#FACA22',
        'brandgreen': '#009A58',
        'lightblue': '#EDF9FD',
        'light': '#F6FAFC',
        'basic': '#262B36',
        'inputblue': '#DAF1FF',
        'kpskyblue': '#1D7FBA',
        'link': '#828CB4',
        'linksky': '#95D6FD',
      },
      borderColor: {
        'primary': '#163466',
        'brandyellow': '#FACA22',
        'brandgreen': '#009A58',
        'lightblue': '#EDF9FD',
        'light': '#F6FAFC',
        'basic': '#262B36',
        'inputblue': '#DAF1FF',
        'kpskyblue': '#1D7FBA',
        'link': '#828CB4',
        'linksky': '#95D6FD',
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}