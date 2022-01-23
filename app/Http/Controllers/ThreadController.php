<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function index()
    {
        $store = Thread::with('Author','Reply')->get();
        return $store;
    }

    public function getStore()
    {
        $store = vapestore::all();

        return $store;
    }

}
