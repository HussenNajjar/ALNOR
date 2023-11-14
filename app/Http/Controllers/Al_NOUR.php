<?php

namespace App\Http\Controllers;

use App\Models\Hero; // Assuming you have an Eloquent model named Hero
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Al_NOUR extends Controller
{
    public function index()
    {
        $show = Hero::all();
        return view('show', compact('show'));
    }

    public function edit($id)
    {
        $user_u = Hero::find($id);

        return view('edit', compact('user_u'));
    }

    public function delete($id)
    {
        $user_u = Hero::find($id);
        if ($user_u) {
            $user_u->delete();
        }

        return redirect()->route('show');
    }

    public function update(Request $request, $id)
    {
        $user_u = Hero::find($id);
        if ($user_u) {
            $user_u->update($request->all());
        }

        return redirect()->route('ADMIN');
    }

    public function create()
    {
        return view('it');
    }

    public function admin()
    {
        return view('admin');
    }

    public function insert(Request $request)
    {
        // Validation example
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'addres' => 'required|string|max:255',
            'day' => 'required|date',
            'hour' => 'required|date_format:H:i',
            'date_time' => 'required|date',
        ]);

        Hero::create($validatedData);

        return response("تمت اضافة البيانات بنجاح");
    }
}
