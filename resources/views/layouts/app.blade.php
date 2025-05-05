<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>InvestasiKu</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    <!-- Komponen Navbar -->
    <x-navbar />

    <!-- Konten Utama -->
    <main class="flex-grow py-6">
        <div class="container mx-auto px-4">
            @yield('content')
        </div>
    </main>

    <!-- Komponen Footer -->
    <x-footer />
</body>
</html>
