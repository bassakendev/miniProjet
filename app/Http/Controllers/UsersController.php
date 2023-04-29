<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\UsersRequest;


class UsersController extends Controller
{
    public function create(): View
    {
        return view('form');
    }
    public function store(UsersRequest $request): view
    {
        return view('success');
    }
}
