<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminNewsController extends Controller
{
    public function index()
    {
        return view('admin/indexAdminPage');
    }
    public function create()
    {
        return view('admin/createNewsPage');
    }
    public function edit(int $id)
    {
        echo "Редактировать новость " . $id;
    }
    public function delete(int $id)
    {
        echo "Удалить новость " . $id;
    }
}
