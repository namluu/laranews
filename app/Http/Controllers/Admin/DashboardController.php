<?php
 
namespace App\Http\Controllers\Admin;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
 
class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
}