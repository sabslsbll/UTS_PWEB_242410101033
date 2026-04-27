@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-blue-600">Pengelolaan Menu Tycake</h2>
        <span class="px-4 py-1 bg-blue-100 text-blue-600 rounded-full text-sm font-semibold">
            Mode: {{ ucfirst($role) }}
        </span>
    </div>

    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-blue-500 text-white">
                <th class="p-3 rounded-tl-lg">Nama Menu</th>
                <th class="p-3">Harga</th>
                @if($role == 'admin')
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach($menus as $menu)
            <tr class="border-b hover:bg-gray-50 transition">
                <td class="p-3 font-medium">{{ $menu['nama'] }}</td>
                <td class="p-3 text-green-600 font-bold">{{ $menu['harga'] }}</td>
                
                @if($role == 'admin')
                
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>

    @if($role == 'user')
    <div class="mt-4 p-4 bg-blue-50 text-blue-700 rounded-lg text-sm">
        ℹ️ Anda login sebagai <strong>User</strong>. Anda hanya diperbolehkan melihat daftar menu tanpa izin mengubah data.
    </div>
    @endif
</div>
@endsection