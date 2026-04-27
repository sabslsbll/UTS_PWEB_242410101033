@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white shadow-xl rounded-2xl overflow-hidden mt-10">
    <div class="bg-blue-600 p-6 text-white text-center">
        <img src="{{ asset('img/logo.png') }}" alt="c:\Users\Admin\Downloads\1000275485.png" class="w-24 h-24 mx-auto mb-4 object-cover rounded-full shadow-md">
        <h2 class="text-2xl font-bold">Welcome to Tycake</h2>
        <p>Please login to continue</p>
    </div>
    <form action="{{ route('login.process') }}" method="POST" class="p-8">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700">Username</label>
            <input type="text" name="username" class="w-full border-2 border-gray-100 p-3 rounded-lg focus:border-blue-500 outline-none" required>
        </div>
        <div class="mb-6">
            <label class="block text-gray-700">Email</label>
            <input type="email" name="email" class="w-full border-2 border-gray-100 p-3 rounded-lg focus:border-blue-500 outline-none" required>
        </div>
        <div class="mb-8">
            <label class="block text-gray-700">Role</label>
            <select name="role" class="w-full border-2 border-gray-100 p-3 rounded-lg">
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>
        <button type="submit" class="w-full bg-blue-600 text-white font-bold py-3 rounded-lg hover:bg-blue-700 transition">LOGIN</button>
    </form>
</div>
@endsection