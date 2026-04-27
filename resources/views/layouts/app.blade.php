<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tycake Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    .bg-main {
        background-image: url("{{ asset('img/bg.png') }}");
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        background-repeat: no-repeat;
        position: relative;
    }
    .bg-main::before {
        content: "";
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.3); 
        z-index: -1;
    }
    @keyframes moveUp {
        0% { transform: translateY(-100vh) rotate(0deg); opacity: 0; }
        10% { opacity: 1; }
        90% { opacity: 1; }
        100% { transform: translateY(-10vh) rotate(360deg); opacity: 0; }
    }

    .floating-object {
        position: fixed;
        bottom: -10%;
        width: 50px;
        height: auto;
        z-index: 0;
        pointer-events: none;
        animation: moveUp 10s linear infinite;
    }
</style>
</head>
<body class="bg-main min-h-screen flex flex-col font-sans text-gray-900">
    
    @if(!Route::is('login'))
        <x-navbar />
    @endif

    <main class="container mx-auto p-8 flex-1">
        @yield('content')
    </main>

    <x-footer />
</body>
</html>