<?php

namespace App\Http\BookController;

use App\Models\User;
use Illuminate\View\View;

class BookController extends Controller
{
    public function index(): View
    {
        $users = User::all();

        return view('index');
    }
}