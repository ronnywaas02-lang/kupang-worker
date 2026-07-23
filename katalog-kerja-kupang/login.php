<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Kupang Kerja</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Supabase JS Library -->
    <script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2"></script>
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
        }
    </style>
</head>
<body class="bg-slate-100 min-h-screen flex items-center justify-center p-4">

    <div class="bg-white rounded-2xl shadow-xl max-w-md w-full p-8 border border-slate-200">
        <div class="text-center mb-6">
            <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center mx-auto mb-3 text-xl font-bold">
                🌐
            </div>
            <h1 class="text-2xl font-bold text-slate-900">Masuk ke Kupang Kerja</h1>
            <p class="text-xs text-slate-500 mt-1">Silakan masukkan akun Anda untuk melanjutkan.</p>
        </div>

        <form id="loginForm" onsubmit="handleLogin(event)" class="space-y-4">
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Email</label>
                <div class="relative">
                    <i class="fa-solid fa-envelope absolute left-3 top-3.5 text-slate-400 text-xs"></i>
                    <input type="email" id="email" required placeholder="nama@email.com" 
                           class="w-full pl-9 pr-3 py-2.5 bg-slate-50 border border-slate-300 rounded-xl text-sm focus:ring-2 focus:ring-blue-500 outline-none">
                </div>
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Password</label>
                <div class="relative">
                    <i class="fa-solid fa-lock absolute left-3 top-3.5 text-slate-400 text-xs"></i>
                    <input type="password" id="password" required placeholder="••••••••" 
                           class="w-full pl-9 pr-3 py-2.5 bg-slate-50 border border-slate-300 rounded-xl text-sm focus:ring-2 focus:ring-blue-500 outline-none">
                </div>
            </div>

            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-xl shadow-md transition-all text-sm mt-2">
                Masuk Sekarang
            </button>
        </form>

        <div class="mt-6 text-center text-xs text-slate-500">
            Belum punya akun? <a href="register.php" class="text-blue-600 font-bold hover:underline">Daftar di sini</a>
        </div>
    </div>

    <script>
        const SUPABASE_URL = "https://hxjundgbquybpralwlrj.supabase.co";

        async function handleLogin(e) {
            e.preventDefault();
            const email = document.getElementById('email').value;
            
            alert("Berhasil masuk! Selamat datang kembali di Kupang Kerja, " + email);
            window.location.href = "index.php";
        }
    </script>
</body>
</html>