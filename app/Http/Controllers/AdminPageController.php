<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class AdminPageController extends Controller
{
    public function index(): View
    {
        return view('admin.index');
    }

    public function sweetAlert(): View
    {
        return view('admin.advance-sweet-alert');
    }

    public function calendar(): View
    {
        return view('admin.calendar');
    }

    public function formElements(): View
    {
        return view('admin.form-elements');
    }

    public function tablesDatatable(): View
    {
        return view('admin.tables-datatable');
    }

    public function login(): View
    {
        return view('admin.auth-login');
    }
}
