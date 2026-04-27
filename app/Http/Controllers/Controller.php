<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller extends \Illuminate\Routing\Controller
{
    public function showLogin() {
        return view('login');
    }

    public function processLogin(Request $request) {
        $user = $request->input('username');
        $role = $request->input('role');
        return redirect()->route('dashboard', ['user' => $user, 'role' => $role]);
    }

    public function showDashboard(Request $request) {
        return view('dashboard', [
            'username' => $request->query('user'),
            'role' => $request->query('role')
        ]);
    }

    public function showPengelolaan(Request $request) {
        $menus = [
            ['nama' => 'Pancake Kering', 'harga' => 'Rp 10.000'],
            ['nama' => 'Pancake Basah', 'harga' => 'Rp 12.000'],
            ['nama' => 'Dubai Chewy Cookie', 'harga' => 'Rp 45.000'],
            ['nama' => 'Cheesecake', 'harga' => 'Rp 33.000'],
            ['nama' => 'Donuts', 'harga' => 'Rp 13.000'],
            ['nama' => 'Macaron', 'harga' => 'Rp 8.000'],
            ['nama' => 'Cookies', 'harga' => 'Rp 9.000'],
            ['nama' => 'Butterscotch', 'harga' => 'Rp 35.000'],
            ['nama'=> 'Strawberry Coffee', 'harga' => 'Rp 43.000'],
            ['nama'=> 'Strawberry Milk Coffee', 'harga' => 'Rp 42.000'],
            ['nama'=> 'Matcha Strawberry', 'harga' => 'Rp 35.000'],
            ['nama'=> 'Gula Aren', 'harga' => 'Rp 20.000'],
            ['nama'=> 'Cappucino Lotus', 'harga' => 'Rp 27.000'],
            ['nama'=> 'Matcha', 'harga' => 'Rp 30.000']
        ];
        return view('pengelolaan', [
            'username' => $request->query('user'),
            'role' => $request->query('role'),
            'menus' => $menus
        ]);
    }

    public function showProfile(Request $request) {
        return view('profile', [
            'username' => $request->query('user'),
            'role' => $request->query('role')
        ]);
    }
}