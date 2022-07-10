<?php

namespace App\Http\Controllers;
use App\Models\barang;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $barg = barang::all();
        return view('pesan.index', compact('barg'));
    }
}
