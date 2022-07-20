<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::with('category');
        if(request()->ajax()){
            return datatables()->eloquent($post)
            ->addColumn('aksi', function($post){
                $button ="<center><a href='/admin/post/".$post->id."/edit'><button class='edit btn btn-primary' id='".$post->id."'>Edit</button></a> ";
                $button  .="<button class='hapus btn btn-danger' id='".$post->id."'>Hapus</button></center>";
                return $button;
            })
            ->rawColumns(['aksi'])
            ->make(true);
        }
        // $category = Category::select('id', 'name', 'slug')->latest()->paginate(10);
        return view('admin.post.index', compact('post'));
    }
    public function edit($id)
    {
        $category = Category::select('id', 'name')->get();
        $post = Post::select('id', 'title', 'thumbnail', 'content', 'description', 'slug', 'category_id', 'date')->whereId($id)->firstOrFail();
        return view('admin/post/edit', compact('post', 'category'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::select('id','name')->get();
        return view('admin.post.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $thumbnail = time() . '-' .$request->thumbnail->getClientOriginalName();
        $request->thumbnail->move('upload/post/thumbnail', $thumbnail);
        $save = Post::create([
            'title' => $request->title,
            'thumbnail' => $thumbnail,
            'date' => Carbon::createFromFormat('d-m-Y', $request->date),
            'slug' => Str::slug($request->title, '-'),
            'content' => $request->content,
            'category_id' => $request->category,
            'description' => $request->description,
        ]);
        if ($save) {
            return response()->json(['status' => 'success', 'msg' => 'berhasil disimpan'], 200);
        } else {
            return response()->json(['text' => 'Gagal diubah'], 422);
        }
    }
    public function content_upload(Request $request)
{
    if($request->hasFile('upload')) {
        $originName = $request->file('upload')->getClientOriginalName();
        $fileName = pathinfo($originName, PATHINFO_FILENAME);
        $extension = $request->file('upload')->getClientOriginalExtension();
        $fileName = $fileName.'_'.time().'.'.$extension;
     
        $request->file('upload')->move('upload/post/content',$fileName);

        $CKEditorFuncNum = $request->input('CKEditorFuncNum');
        $url = asset('upload/post/content/'.$fileName); 
        $msg = 'Image uploaded successfully'; 
        $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
            
        @header('Content-type: text/html; charset=utf-8'); 
        echo $response;
}
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = [
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category,
            'slug' => Str::slug($request->title, '-'),
            'date' => Carbon::createFromFormat('d-m-Y', $request->date),
            'description' => $request->description
        ];
        $post = Post::select('thumbnail', 'id')->whereId($id)->first();
        if ($request->thumbnail) {
            File::delete('upload/post/thumbnail' .$post->thumbnail);

            $thumbnail = time() . '-' . $request->thumbnail->getClientOriginalName();
            $request->thumbnail->move('upload/post/thumbnail', $thumbnail);

            $data['thumbnail'] = $thumbnail;
        }

        $post->update($data);
        if ($post) {
            return response()->json(['status' => 'success', 'msg' => 'berhasil disimpan'], 200);
        } else {
            return response()->json(['text' => 'Gagal diubah'], 422);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function delete($id)
    {
        $post = Post::select('thumbnail', 'id')->whereId($id)->firstOrFail();
        File::delete('upload/post/thumbnail' . $post->thumbnail);
        $post->delete();
        if ($post) {
            return response()->json(['status' => 'success', 'msg' => 'berhasil dihapus'], 200);
        } else {
            return response()->json(['text' => 'Gagal diubah'], 422);
        }
    }
}
