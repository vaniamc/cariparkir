<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        $data['page_title'] = 'Semua User';
        return view('dashboard', $data);
    }

    public function home()
    {
        return view('welcome');
    }

    public function parkir()
    {
        $data['page_title'] = 'Semua Tempat Parkir';
        return view('parkir', $data);
    }

    public function banuser()
    {
        $data['page_title'] = 'Ban User';
        return view('banuser', $data);
    }

    public function history()
    {
        $data['page_title'] = 'History Transaksi';
        return view('history', $data);
    }
}
