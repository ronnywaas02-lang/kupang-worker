<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun - Kupang Kerja</title>
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
            <h1 class="text-2xl font-bold text-slate-900">Daftar Akun Kupang Kerja</h1>
            <p class="text-xs text-slate-500 mt-1">Pilih peran Anda dan mulai bergabung bersama kami.</p>
        </div>

        <form id="registerForm" onsubmit="handleRegister(event)" class="space-y-4">
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Nama Lengkap</label>
                <div class="relative">
                    <i class="fa-solid fa-user absolute left-3 top-3.5 text-slate-400 text-xs"></i>
                    <input type="text" id="fullName" required placeholder="Nama Anda" 
                           class="w-full pl-9 pr-3 py-2.5 bg-slate-50 border border-slate-300 rounded-xl text-sm focus:ring-2 focus:ring-blue-500 outline-none">
                </div>
            </div>

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

            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Daftar Sebagai</label>
                <div class="relative">
                    <i class="fa-solid fa-id-badge absolute left-3 top-3.5 text-slate-400 text-xs"></i>
                    <select id="role" class="w-full pl-9 pr-3 py-2.5 bg-slate-50 border border-slate-300 rounded-xl text-sm focus:ring-2 focus:ring-blue-500 outline-none">
                        <option value="worker">Pencari Kerja / Tukang</option>
                        <option value="employer">Pemberi Kerja / Klien</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-xl shadow-md transition-all text-sm mt-2">
                Daftar Sekarang
            </button>
        </form>

        <div class="mt-6 text-center text-xs text-slate-500">
            Sudah punya akun? <a href="login.php" class="text-blue-600 font-bold hover:underline">Masuk di sini</a>
        </div>
    </div>

    <script>
        const SUPABASE_URL = "https://hxjundgbquybpralwlrj.supabase.co";

        async function handleRegister(e) {
            e.preventDefault();
            const name = document.getElementById('fullName').value;
            const role = document.getElementById('role').value;

            alert("Pendaftaran berhasil! Akun " + name + " terdaftar sebagai " + (role === 'worker' ? 'Pencari Kerja' : 'Pemberi Kerja'));
            window.location.href = "login.php";
        }
    </script>
</body>
</html>