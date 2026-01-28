<?php
namespace App\Http\Controllers;

use App\Models\BoothBooking;
use Illuminate\Http\Request;

class BoothController extends Controller
{
    public function index()
    {
        return view('booth.index');
    }

    public function form()
    {
        return view('booth.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'booth' => 'required',
        ]);

        BoothBooking::create($request->all());

        return redirect()->route('booth.success');
    }

    public function success()
    {
        return view('booth.success');
    }

    public function adminIndex()
    {
        $data = BoothBooking::latest()->get();
        return view('booth.admin', compact('data'));
    }
}

?>