<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero; // Assuming you have an Eloquent model named Hero
use Illuminate\Support\Facades\DB;

class ENG extends Controller
{
    public function index()
    {
        $show = Hero::all();
        return view('show1', compact('show'));
    }

    public function index1()
    {
        return view('index');
    }

    public function edit($id)
    {
        $user = Hero::find($id);
        return view('edit', compact('user'));
    }

    public function delete($id)
    {
        $user = Hero::find($id);
        if ($user) {
            $user->delete();
        }

        return redirect()->route('admin_hero')->with('info', 'تم الحذف السجل بنجاح!');
    }

    public function admin()
    {
        $show1 = Hero::all();
        return view('admin', compact('show1'));
    }

    public function update(Request $request, $id)
    {
        $user = Hero::find($id);
        if ($user) {
            $user->update($request->all());
        }

        return redirect()->route('admin_hero')->with('info', 'تم التعديل السجل بنجاح!');
    }

    public function create()
    {
        return view('it');
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

        return back()->with('info', 'تم إضافة السجل بنجاح!');
    }
}
