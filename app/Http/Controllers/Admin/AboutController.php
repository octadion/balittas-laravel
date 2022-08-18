 <?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::get();
        if(request()->ajax()){
            return datatables()->of($about)
            ->addColumn('aksi', function($about){
                // $button ="<center><a href='/admin/about/".$about->id."/edit'><button class='edit btn btn-primary' id='".$about->id."'>Edit</button></a> ";
                $button = "<center><button class='btn btn-primary dropdown-toggle' type='button' id='dropdownMenuButton2' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Aksi</button>";
                $button  .= " <div class='dropdown-menu'>
                <a class='edit dropdown-item has-icon' href='/admin/about/".$about->id."/edit' id='".$about->id."'><i class='far fa-edit'></i> Edit</a>
                <a class='detail dropdown-item has-icon' href='/admin/about/".$about->id."/detail'><i class='far fa-eye'></i> Detail</a>
              </div>";
                $button  .="<button class='hapus btn btn-danger' id='".$about->id."'>Hapus</button></center>";
                return $button;
            })
            ->rawColumns(['aksi'])
            ->make(true);
        }
        return view('admin.about.index', compact('about'));
    }
    public function create()
    {
        return view('admin.about.create');
    }
    public function store(Request $request)
    {
        $save = About::create([
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
    public function about_content_upload(Request $request)
    {
        if($request->hasFile('upload')) {
        $originName = $request->file('upload')->getClientOriginalName();
        $fileName = pathinfo($originName, PATHINFO_FILENAME);
        $extension = $request->file('upload')->getClientOriginalExtension();
        $fileName = $fileName.'_'.time().'.'.$extension;
     
        $request->file('upload')->move('upload/about/content',$fileName);

        $CKEditorFuncNum = $request->input('CKEditorFuncNum');
        $url = asset('upload/about/content/'.$fileName); 
        $msg = 'Image uploaded successfully'; 
        $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
            
        @header('Content-type: text/html; charset=utf-8'); 
        echo $response;
    }}
    public function edit($id)
    {
        $about = About::select('id', 'title','content','slug')->whereId($id)->firstOrFail();
        return view('admin/about/edit', compact('about'));
    }
    public function update(Request $request, $id)
    {
        $data = [
            'title' => $request->title,
            'content' => $request->content,
            'slug' => Str::slug($request->title, '-'),
            // 'user_id' => Auth::user()->id
        ];
        $about = About::select('id')->whereId($id)->first();
        $about->update($data);
        if ($about) {
            return response()->json(['status' => 'success', 'msg' => 'berhasil disimpan'], 200);
        } else {
            return response()->json(['text' => 'Gagal diubah'], 422);
        }
    }
    public function delete($id)
    {
        $about = About::select('id')->whereId($id)->firstOrFail();
        $about->delete();
        if ($about) {
            return response()->json(['status' => 'success', 'msg' => 'berhasil dihapus'], 200);
        } else {
            return response()->json(['text' => 'Gagal diubah'], 422);
        }
    }
}
