<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pakar - Diagnosa Internet</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-slate-50 font-sans text-slate-900">
    <nav class="bg-indigo-600 p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/diagnosa" class="text-white text-xl font-bold flex items-center gap-2">
                <i class="fas fa-network-wired"></i> SiPakTernet
            </a>
            <span class="text-indigo-100 text-sm italic">Sistem Pakar Diagnosa Gangguan Internet</span>
        </div>
    </nav>

    <main class="container mx-auto py-10 px-4">
        @yield('content')
    </main>

    <footer class="text-center py-6 text-slate-500 text-sm">
        &copy; 2025 Tugas Mata Kuliah Expert System - Certainty Factor Method
    </footer>
</body>

</html>