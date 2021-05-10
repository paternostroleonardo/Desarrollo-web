<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;

class ExcelController extends Controller
{
    public function exportExcel()
    {
       return Excel::download(new UsersExport, 'userslist.xlsx');
    }
}
