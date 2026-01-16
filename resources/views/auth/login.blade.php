<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

<div class="bg-white p-6 rounded shadow w-80">
    <h2 class="text-xl font-bold text-center mb-4">
        Login Admin
    </h2>

    <form method="POST" action="/login">
        @csrf

        <div class="mb-4">
            <label class="block text-sm">Username</label>
            <input type="text" class="w-full border rounded p-2">
        </div>

        <div class="mb-4">
            <label class="block text-sm">Password</label>
            <input type="password" class="w-full border rounded p-2">
        </div>

        <button class="w-full bg-blue-600 text-white py-2 rounded">
            Login
        </button>
    </form>
</div>

</body>
</html>
