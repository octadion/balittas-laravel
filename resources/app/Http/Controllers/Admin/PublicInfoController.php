<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PublicInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PublicInfoController extends Controller
{
    public function index()
    {
        $public_info = PublicInfo::get();
        if(request()->ajax()){
            return datatables()->of($public_info)
            ->addColumn('aksi', function($public_info){
                $button ="<center><a href='/admin/public_info/".$public_info->id."/edit'><button class='edit btn btn-primary' id='".$public_info->id."'>Edit</button></a> ";
                $button  .="<button class='hapus btn btn-danger' id='".$public_info->id."'>Hapus</button></center>";
                return $button;
            })
            ->rawColumns(['aksi'])
            ->make(true);
        }
        return view('admin.public_info.index', compact('public_info'));
    }
    public function create()
    {
        return view('admin.public_info.create');
    }
    public function store(Request $request)
    {
        $save = PublicInfo::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'content' => $request->content,
            // 'user_id' => Auth::user()->id
        ]);
        if ($save) {
            return response()->json(['status' => 'success', 'msg' => 'berhasil disimpan'], 200);
        } else {
            return response()->json(['text' => 'Gagal diubah'], 422);
        }
    }
    public function info_content_upload(Request $request)
    {
        if($request->hasFile('upload')) {
        $originName = $request->file('upload')->getClientOriginalName();
        $fileName = pathinfo($originName, PATHINFO_FILENAME);
        $extension = $request->file('upload')->getClientOriginalExtension();
        $fileName = $fileName.'_'.time().'.'.$extension;
     
        $request->file('upload')->move('upload/public_info/content',$fileName);

        $CKEditorFuncNum = $request->input('CKEditorFuncNum');
        $url = asset('upload/public_info/content/'.$fileName); 
        $msg = 'Image uploaded successfully'; 
        $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
            
        @header('Content-type: text/html; charset=utf-8'); 
        echo $response;
    }}
    public function edit($id)
    {
        $public_info = PublicInfo::select('id', 'title','content','slug')->whereId($id)->firstOrFail();
        return view('admin/public_info/edit', compact('public_info'));
    }
    public function update(Request $request, $id)
    {
        $data = [
            'title' => $request->title,
            'content' => $request->content,
            'slug' => Str::slug($request->title, '-'),
            // 'user_id' => Auth::user()->id
        ];
        $public_info = PublicInfo::select('id')->whereId($id)->first();
        $public_info->update($data);
        if ($public_info) {
            return response()->json(['status' => 'success', 'msg' => 'berhasil disimpan'], 200);
        } else {
            return response()->json(['text' => 'Gagal diubah'], 422);
        }
    }
    public function delete($id)
    {
        $public_info = PublicInfo::select('id')->whereId($id)->firstOrFail();
        $public_info->delete();
        if ($public_info) {
            return response()->json(['status' => 'success', 'msg' => 'berhasil dihapus'], 200);
        } else {
            return response()->json(['text' => 'Gagal diubah'], 422);
        }
    }
}
