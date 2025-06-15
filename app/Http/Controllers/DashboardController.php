<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;


class DashboardController extends Controller
{
    public function index()
    {

        return view('admin.dashboard',);
    }

    public function users()
    {
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }
    
    public function getUsers(Request $request)
    {
        if ($request->ajax()) {
            $users = User::select(['id', 'name', 'email', 'email_verified_at', 'created_at']);

            return DataTables::of($users)
                ->addColumn('remember_token', function ($row) {
                    return $row->remember_token ? $row->remember_token : 'N/A';
                })
                ->addColumn('expired_at', function ($row) {
                    return $row->created_at->addDays(30)->format('Y-m-d');
                })
                ->addColumn('action', function ($row) {
                    return '<a href="#" class="text-blue-500">View</a>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
