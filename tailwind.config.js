/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#6A451D',    // Coklat Tua (untuk teks penting, footer)
        'secondary': '#AF8F6F',  // Coklat Sedang (aksen)
        'accent': '#E8B400',     // Kuning Keemasan (aksen cerah, tombol)
        'background': '#FDF9F3', // Krem Sangat Muda (latar belakang halaman)
        'text-dark': '#3C2F2F',  // Abu-abu Coklat Tua (teks utama)
        'text-light': '#8D7B68', // Abu-abu Coklat Muda (teks sekunder)
      },
      fontFamily: {
        sans: ['Poppins', 'sans-serif'], // Font sans-serif utama
        serif: ['Merriweather', 'serif'], // Font serif opsional untuk judul tertentu
      },
      fontSize: {
        'lg': '1rem',      // default: 1.125rem
        'xl': '1.1rem',      // default: 1.25rem
        '2xl': '1.2rem',     // default: 1.5rem
        '3xl': '1.5rem',    // default: 1.875rem
        '4xl': '1.8rem',     // default: 2.25rem
        '5xl': '2rem',     // default: 3rem
        '6xl': '3rem',     // default: 4rem
      },
    },
  },
  plugins: [],
}