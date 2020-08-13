<?php

namespace App\http\controllers;

use App\Mahasiswa;
use Illuminate\http\Request;

class Mahasiswacontroller extends controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  Illuminate\Http\Response
     */
    public function index()
    {
        return view('Mahasiswa.index');
    }
}