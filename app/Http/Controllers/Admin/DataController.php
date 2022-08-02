<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Variety;
use App\Models\Data;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
class DataController extends Controller
{
    public function index()
    {
        $data = Data::with('variety')->where('user_id', Auth::user()->id);
        if(request()->ajax()){
            return datatables()->eloquent($data)
            ->addColumn('aksi', function($data){
                // $button ="<center><a href='/admin/post/".$post->id."/edit'><button class='edit btn btn-primary' id='".$post->id."'>Edit</button></a> ";
                $button = "<center><button class='btn btn-primary dropdown-toggle' type='button' id='dropdownMenuButton2' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Aksi</button>";
                $button  .= " <div class='dropdown-menu'>
                <a class='edit dropdown-item has-icon' href='/admin/data_variety/".$data->id."/edit' id='".$data->id."'><i class='far fa-edit'></i> Edit</a>
                <a class='detail dropdown-item has-icon' href='/admin/data_variety/".$data->id."/detail'><i class='far fa-eye'></i> Detail</a>
              </div>";
                $button  .="<button class='hapus btn btn-danger' id='".$data->id."'>Hapus</button></center>";
                return $button;
            })
            ->rawColumns(['aksi'])
            ->make(true);
        }
        return view('admin.data_variety.index', compact('data'));
    }
    public function create()
    {
        $variety = Variety::select('id','name')->get();
        return view('admin.data_variety.create', compact('variety'));
    }
    public function edit($id)
    {
        $variety = Variety::select('id', 'name')->get();
        $data = Data::select('id', 'title','content','slug', 'variety_id')->whereId($id)->where('user_id', Auth::user()->id)->firstOrFail();
        return view('admin/data_variety/edit', compact('data', 'variety'));
    }
    public function store(Request $request)
    {
        $save = Data::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'content' => $request->content,
            'variety_id' => $request->variety,
            'user_id' => Auth::user()->id
        ]);
        if ($save) {
            return response()->json(['status' => 'success', 'msg' => 'berhasil disimpan'], 200);
        } else {
            return response()->json(['text' => 'Gagal diubah'], 422);
        }
    }
    public function data_content_upload(Request $request)
{
    if($request->hasFile('upload')) {
        $originName = $request->file('upload')->getClientOriginalName();
        $fileName = pathinfo($originName, PATHINFO_FILENAME);
        $extension = $request->file('upload')->getClientOriginalExtension();
        $fileName = $fileName.'_'.time().'.'.$extension;
     
        $request->file('upload')->move('upload/data/content',$fileName);

        $CKEditorFuncNum = $request->input('CKEditorFuncNum');
        $url = asset('upload/data/content/'.$fileName); 
        $msg = 'Image uploaded successfully'; 
        $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
            
        @header('Content-type: text/html; charset=utf-8'); 
        echo $response;
}
}
public function update(Request $request, $id)
    {
        $data_variety = [
            'title' => $request->title,
            'content' => $request->content,
            'variety_id' => $request->variety,
            'slug' => Str::slug($request->title, '-'),
            'user_id' => Auth::user()->id
        ];
        $data = Data::select('id')->whereId($id)->first();

        $data->update($data_variety);
        if ($data) {
            return response()->json(['status' => 'success', 'msg' => 'berhasil disimpan'], 200);
        } else {
            return response()->json(['text' => 'Gagal diubah'], 422);
        }
    }
    public function delete($id)
    {
        $data = Data::select('id')->whereId($id)->firstOrFail();
        $data->delete();
        if ($data) {
            return response()->json(['status' => 'success', 'msg' => 'berhasil dihapus'], 200);
        } else {
            return response()->json(['text' => 'Gagal diubah'], 422);
        }
    }
}
