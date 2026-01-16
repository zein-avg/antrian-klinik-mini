<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

<div class="bg-white p-6 rounded-lg shadow w-80">
    <h2 class="text-xl font-bold text-center text-blue-600 mb-4">
        Login Admin
    </h2>

    @if(session('error'))
        <div class="bg-red-100 text-red-700 p-2 rounded mb-3 text-sm">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="/admin/login">
        @csrf

        <div class="mb-4">
            <label class="block text-sm mb-1">Email</label>
            <input type="text" name="email"
                   class="w-full border rounded p-2"
                   placeholder="admin">
        </div>

        <div class="mb-4">
            <label class="block text-sm mb-1">Password</label>
            <input type="password" name="password"
                   class="w-full border rounded p-2"
                   placeholder="admin">
        </div>

        <button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
            Login
        </button>
    </form>
</div>

</body>
</html>
