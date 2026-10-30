<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Menu Kafe</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f8f5f0;
            color: #333;
        }

        header {
            background: #2b1b14;
            color: white;
            padding: 22px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        header h2 {
            color: #d6ad60;
        }

       <nav>
    <a href="{{ url('/') }}">Beranda</a>
    <a href="{{ url('/menu') }}">Menu</a>
    <a href="{{ url('/kategori') }}">Kategori</a>
    <a href="{{ url('/tentang') }}">Tentang</a>
    <a href="{{ url('/kontak') }}">Kontak</a>
</nav>
        nav a:hover {
            color: #d6ad60;
        }

        main {
            padding: 35px 8%;
            min-height: 70vh;
        }

        footer {
            background: #2b1b14;
            color: white;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>

    <header>
        <h2>KAFE NUSANTARA</h2>

        <nav>
            <a href="/">Beranda</a>
            <a href="/menu">Menu</a>
            <a href="/kategori">Kategori</a>
            <a href="/tentang">Tentang</a>
            <a href="/kontak">Kontak</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; 2026 Kafe Nusantara. All Rights Reserved.
    </footer>

</body>
</html>