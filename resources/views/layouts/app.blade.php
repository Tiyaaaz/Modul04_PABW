<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporBanjir - BPBD Kabupaten Bandung</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f5ebe0; color: #4a3728; }
        nav { background: #c9a27e; padding: 12px 24px; box-shadow: 0 2px 4px rgba(74,55,40,.2); }
        nav a { color: #3b2a1c; margin-right: 16px; text-decoration: none; font-weight: bold; }
        nav a:hover { color: #ffffff; }
        main { max-width: 800px; margin: 24px auto; padding: 0 16px; }
        h2 { color: #6f4e37; }
        input { padding: 6px; border: 1px solid #d5bdaf; border-radius: 4px; background: #fffaf3; }
        button { background: #b08968; color: white; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; }
        button:hover { background: #8d6b4e; }
        a { color: #8d6b4e; }
        .card { background: #fffaf3; border: 1px solid #e3d5ca; border-radius: 6px; padding: 12px 16px; margin-bottom: 12px; box-shadow: 0 1px 3px rgba(74,55,40,.1); }
    </style>
</head>
<body>
    <nav>
        <a href="/lapor">Lapor Banjir</a>
        <a href="/daftar-laporan">Daftar Laporan</a>
    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>