<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DataTables;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::get();
        if(request()->ajax()){
            return datatables()->of($category)
            ->addColumn('aksi', function($category){
                $button ="<button class='edit btn btn-danger' id='".$category->id."'>Edit</button>";
                $button  .="<button class='hapus btn btn-danger' id='".$category->id."'>Hapus</button>";
                return $button;
            })
            ->rawColumns(['aksi'])
            ->make(true);
        }
        // $category = Category::select('id', 'name', 'slug')->latest()->paginate(10);
        return view('admin.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->id;
        $data = Category::find($id);
        $data->delete();
        return response()->json(['text' => 'berhasil dihapus'], 200);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data['name'] = $request->name;
        // $data['']
        // Category::create($data);
        // Category::create([
        //     'name' => $request->name,
        //     'slug' => Str::slug($request->name, '-')
        // ]);
        // dd($request->all());
        $category = new Category();
        $category->name = Str::title($request->name);
        $category->slug =  Str::slug($request->name, '-');
        $save = $category->save();
        if($save){
            return response()->json(['data'=>$category,
            'text'=>'Data berhasil disimpan'], 200);
        }else{
            return response()->json(['data'=>$category,
            'text'=>'Data berhasil disimpan']);
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
    public function showUpdate(Request $request)
    {
        # code...
        $id = $request->id;
        $data = Category::find($id);
        return response()->json(['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $category = [
            'name' => Str::title($request->name),
            'slug' => Str::slug($request->name, '-')

        ];
        $data = Category::find($id);
        $save = $data->update($category);
        if ($save) {
            return response()->json(['text' => 'berhasil diubah'], 200);
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
}
