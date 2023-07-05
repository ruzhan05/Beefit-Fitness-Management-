<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //__construct
    public function _construct()
    {
        $this->middleware('auth');
    }
}
