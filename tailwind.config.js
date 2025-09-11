/** @type {import('tailwindcss').Config} */

// 1. Tambahkan baris import ini di paling atas
import typography from '@tailwindcss/typography';

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'primary': '#005A34',   // Hijau Tua (untuk teks penting, footer)
                'secondary': '#E8B400', // Kuning Keemasan (aksen)
                'accent': '#FFD700',    // Kuning Cerah (aksen cerah, tombol)
                'background': '#F8F9FA',// Putih Gading (latar belakang halaman)
                'text-dark': '#333333', // Abu-abu Sangat Tua (teks utama)
                'text-light': '#6c757d',// Abu-abu Sedang (teks sekunder)
            },
            fontFamily: {
                sans: ['Roboto', 'sans-serif'], // Font sans-serif utama
                serif: ['Merriweather', 'serif'], // Font serif untuk judul
            },
            // Anda bisa menghapus kustomisasi fontSize jika ukuran default Tailwind sudah cukup
            fontSize: {
                'lg': '1.125rem', // default: 1.125rem
                'xl': '1.25rem',  // default: 1.25rem
                '2xl': '1.5rem',  // default: 1.5rem
                '3xl': '1.875rem',// default: 1.875rem
                '4xl': '2.25rem', // default: 2.25rem
                '5xl': '3rem',    // default: 3rem
                '6xl': '3.5rem',  // default: 4rem (sedikit dikecilkan)
            },
            // Menambahkan keyframes dan animasi untuk 'pulse-slow'
            animation: {
                'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
            },
            keyframes: {
                pulse: {
                    '0%, 100%': {
                        opacity: 1
                    },
                    '50%': {
                        opacity: .5
                    },
                }
            }
        },
    },
    
    // Menambahkan plugin typography
    plugins: [
        typography,
    ],
}