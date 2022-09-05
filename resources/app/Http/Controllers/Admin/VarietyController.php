<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Variety;

use Illuminate\Support\Str;

class VarietyController extends Controller
{
    public function index()
    {
        $variety = variety::get();
        if(request()->ajax()){
            return datatables()->of($variety)
            ->addColumn('aksi', function($variety){
                $button ="<center><button class='edit btn btn-primary' id='".$variety->id."'>Edit</button> ";
                $button  .="<button class='hapus btn btn-danger' id='".$variety->id."'>Hapus</button></center>";
                return $button;
            })
            ->rawColumns(['aksi'])
            ->make(true);
        }
        // $variety = variety::select('id', 'name', 'slug')->latest()->paginate(10);
        return view('admin.variety.index', compact('variety'));
    }
    public function store(Request $request)
    {
      
        $variety = new Variety();
        $variety->name = Str::title($request->name);
        $variety->slug =  Str::slug($request->name, '-');
        $save = $variety->save();
        if($save){
            return response()->json(['data'=>$variety,
            'text'=>'Data berhasil disimpan'], 200);
        }else{
            return response()->json(['data'=>$variety,
            'text'=>'Data berhasil disimpan']);
        }
    }
    public function showUpdate(Request $request)
    {
        # code...
        $id = $request->id;
        $data = Variety::find($id);
        return response()->json(['data' => $data]);
    }
    public function update(Request $request)
    {
        $id = $request->id;
        $variety = [
            'name' => Str::title($request->name),
            'slug' => Str::slug($request->name, '-')

        ];
        $data = Variety::find($id);
        $save = $data->update($variety);
        if ($save) {
            return response()->json(['text' => 'berhasil diubah'], 200);
        } else {
            return response()->json(['text' => 'Gagal diubah'], 422);
        }
    }
    public function delete(Request $request)
    {
        $id = $request->id;
        $data = Variety::find($id);
        $data->delete();
        return response()->json(['text' => 'berhasil dihapus'], 200);
    }
}
