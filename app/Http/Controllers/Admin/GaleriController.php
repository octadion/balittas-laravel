<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::get();
        if(request()->ajax()){
            return datatables()->of($galeri)
            ->addColumn('aksi', function($galeri){
                $button ="<center><button class='edit btn btn-primary' data-toggle='modal' data-target='#modal_ubah' id='".$galeri->id."'>Edit</button> ";
                $button  .="<button class='hapus btn btn-danger' id='".$galeri->id."'>Hapus</button></center>";
                return $button;
            })
            ->rawColumns(['aksi'])
            ->make(true);
        }
        // $category = Category::select('id', 'name', 'slug')->latest()->paginate(10);
        return view('admin.web.galeri', compact('galeri'));
    }
    public function store(Request $request)
    {
        $image = time() . '-' .$request->image->getClientOriginalName();
        $request->image->move('upload/galeri/content', $image);
        $save = Galeri::create([
            'title' => $request->title,
            'image' => $image,
        ]);
        if ($save) {
            return response()->json(['status' => 'success', 'msg' => 'berhasil disimpan'], 200);
        } else {
            return response()->json(['text' => 'Gagal diubah'], 422);
        }
    }
    public function showUpdate(Request $request)
    {
        # code...
        $id = $request->id;
        $data = Galeri::find($id);
        return response()->json(['data' => $data]);
    }
    public function update(Request $request)
    {
        $id = $request->id;
        $data = [
            'title' => $request->title,
        ];
        $post = Galeri::select('image','id')->whereId($id)->first();
        if ($request->image) {
            File::delete('upload/galeri/content' .$post->image);

            $image = time() . '-' . $request->image->getClientOriginalName();
            $request->image->move('upload/galeri/content', $image);

            $data['image'] = $image;
        }

        $post->update($data);
        if ($post) {
            return response()->json(['status' => 'success', 'msg' => 'berhasil disimpan'], 200);
        } else {
            return response()->json(['text' => 'Gagal diubah'], 422);
        }
    }
    public function delete(Request $request)
    {
        $id = $request->id;
        $post = Galeri::select('image', 'id')->whereId($id)->firstOrFail();
        File::delete('upload/galeri/content' . $post->image);
        $post->delete();
        if ($post) {
            return response()->json(['status' => 'success', 'msg' => 'berhasil dihapus'], 200);
        } else {
            return response()->json(['text' => 'Gagal diubah'], 422);
        }
    }
}
