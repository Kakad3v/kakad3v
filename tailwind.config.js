module.exports = {
  mode: 'jit',
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.svelte',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
