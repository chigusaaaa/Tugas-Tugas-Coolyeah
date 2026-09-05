# Landing Page - Chigusa Corporate

Proyek akhir mata kuliah Desain Web (Pertemuan Kedua) — landing page single page yang dibangun menggunakan **Tailwind CSS** dan **Vite**.

## 📋 Kreator

- **Nama:** Hazwan Fahmi Ghailan
- **NIM:** C030325124

## 📖 Deskripsi Proyek

Landing page ini dibuat untuk memenuhi tugas praktikum akhir CSS & Tailwind, dengan tema perusahaan fiktif "Chigusa Corporate" yang menawarkan layanan bisnis digital. Proyek ini mendemonstrasikan penggunaan Tailwind CSS v4 (termasuk `@theme` dan `@apply`), navigasi responsif, serta beberapa animasi interaktif.

### Fitur yang diimplementasikan:
- **Navbar responsif** — menu collapse menjadi ikon hamburger di layar mobile.
- **Hero Section** — judul, sub-judul, tombol CTA dengan transisi hover.
- **Section Fitur/Layanan** — 3 kartu keunggulan dalam grid responsif (1 kolom di mobile, 2 di tablet, 3 di desktop).
- **Section Testimoni** — ditampilkan menggunakan flexbox.
- **Footer** — informasi kontak (email) dan tautan sosial media dengan ikon SVG.
- **Warna kustom** — didefinisikan melalui `@theme` di `style.css` (`--color-brand-500`).
- **Komponen `@apply`** — class `.btn-primary` dan `.btn-secondary`.
- **Scroll reveal animation** — section muncul dengan efek fade-in saat di-scroll, menggunakan `IntersectionObserver`.
- **Floating WhatsApp button** — muncul otomatis saat halaman di-scroll sampai bawah, redirect langsung ke WhatsApp.
- **Responsif penuh** di 3 breakpoint: mobile, tablet, dan desktop.

## 🛠️ Teknologi yang Digunakan

- [Vite](https://vite.dev/) — build tool & dev server
- [Tailwind CSS v4](https://tailwindcss.com/) — utility-first CSS framework
- Vanilla JavaScript — untuk interaktivitas (toggle menu, scroll reveal, floating button)

## 🚀 Cara Menjalankan Proyek

### Prasyarat
Pastikan [Node.js](https://nodejs.org/) (versi LTS) sudah terinstal di komputer.

### Langkah-langkah

1. **Clone repository ini**
```bash
   git clone https://github.com/chigusaaaa/landing-page-tugas.git
   cd landing-page-tugas
```

2. **Install dependencies**
```bash
   npm install
```

3. **Jalankan development server**
```bash
   npm run dev
```
   Buka browser dan akses `http://localhost:5173/` (atau port lain yang muncul di terminal).

4. **Build untuk production** (opsional)
```bash
   npm run build
```
   Hasil build akan tersimpan di folder `dist/`.

## 🌐 Live Demo

[Tambahkan link deploy di sini setelah proses deploy selesai]

## 📁 Struktur Proyek

```
├── public/
│   └── logo.png
├── src/
│   ├── main.js
│   └── style.css
├── index.html
├── package.json
└── vite.config.js
```