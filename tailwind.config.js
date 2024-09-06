/** @type {import('tailwindcss').Config} */
export default {
  prefix: 'tw-', // Esto evita conflictos con las clases de Bootstrap
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  corePlugins: {
    preflight: false, // Esto evita que Tailwind resetee los estilos base
  },
  theme: {
    extend: {},
  },
  plugins: [],
}

