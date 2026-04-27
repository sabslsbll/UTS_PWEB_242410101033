<nav class="bg-blue-600 text-white p-4 shadow-lg flex justify-between items-center">
    <div class="font-bold text-xl uppercase tracking-wider">Tycake Restaurant</div>
    <div class="space-x-6">
        <a href="{{ route('dashboard', ['user' => request('user'), 'role' => request('role')]) }}"
            class="font-semibold pb-2 transition-all duration-300 {{ request()->is('dashboard*') ? 'underline decoration-white-600 decoration-2 underline-offset-8 text-white-600' : 'text-white hover:text-gray-500' }}">
            Dashboard
        </a>
        <a href="{{ route('pengelolaan', ['user' => request('user'), 'role' => request('role')]) }}"
            class="font-semibold pb-2 transition-all duration-300 {{ request()->is('pengelolaan*') ? 'underline decoration-white-600 decoration-2 underline-offset-8 text-white-600' : 'text-white hover:text-gray-500' }}">
            Pengelolaan
        </a>
        <a href="{{ route('profile', ['user' => request('user'), 'role' => request('role')]) }}"
            class="font-semibold pb-2 transition-all duration-300 {{ request()->is('profile*') ? 'underline decoration-white-600 decoration-2 underline-offset-8 text-white-600' : 'text-white hover:text-gray-500' }}">
            Profile
        </a>
    </div>
</nav>
