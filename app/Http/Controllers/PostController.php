<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = post::all();
        return view('index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {  
    
        // احفظ الملف في مجلد المشروع واحفظ اسم الملف في قاعدة البيانات
        if ($request->hasFile('video')) {
            $videoFile = $request->file('video');
            $videoPath = $videoFile->store('video', 'public'); // يتم تخزين الملف في مجلد public/videos
            $post = new Post;
            $post->title = $request->input('title');
            $post->contents = $request->input('contents');
            $post->video = $videoFile;
            $post->save();
    
        }

    // احفظ مسار الفيديو في قاعدة البيانات


    // أي إجراءات إضافية ترغب في تنفيذها
    
        return redirect()->back()->with('success', 'تم إضافة المنشور بنجاح');
    }
    

    public function show($id)
    {
        $shpw_post = post::find($id);

        if (!$shpw_post) {
            return redirect()->back()->with('error', 'لم يتم العثور على السجل');
        }
        return view('post.show', compact('show_post'));
    }


    public function edit($id)
    {

        $edit = post::find($id);

        if (!$edit) {
            return redirect()->back()->with('error', 'المنشور غير موجود');
        } else {

            return view('post.edit');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {


        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'contents' => 'required|string|max:255',
            'video' => 'required'
        ]);


        $data = post::find($id);


        if (!$data) {
            return redirect()->back()->with('dddd');
        }

        $data->title = $validatedData['title'];
        $data->title = $validatedData['contents'];
        $data->title = $validatedData['video'];
        $data->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $data = post::find($id);

        if (!$data) {
            return redirect()->back()->with('error', 'المنشور غير موجود');
        }

        $data->delete;
        return redirect()->back()->with('info', 'تم الحذف بنجاح');
    }
}
