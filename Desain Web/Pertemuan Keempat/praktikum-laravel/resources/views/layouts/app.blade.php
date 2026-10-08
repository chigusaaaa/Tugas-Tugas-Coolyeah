<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sistem Informasi Akademik')</title>
    <style>
        body { font-family: sans-serif; margin: 0; }
        nav { background: #222; padding: 12px 24px; }
        nav a { color: #fff; margin-right: 16px; text-decoration: none; }
        main { padding: 24px; }
        table { border-collapse: collapse; }
        td, th { border: 1px solid #999; padding: 6px 10px; }
        .pesan { background: #d4edda; padding: 8px 12px; margin-bottom: 12px; }
    </style>
</head>
<body>
    <nav>
        <a href="/mahasiswa">Mahasiswa</a>
        <a href="/matakuliah">Mata Kuliah</a>
        <a href="/statistik">Statistik</a>
    </nav>
    <main>
        @if (session('pesan'))
            <div class="pesan">{{ session('pesan') }}</div>
        @endif
        @yield('content')
    </main>
</body>
</html>