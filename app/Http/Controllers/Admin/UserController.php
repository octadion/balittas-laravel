<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = User::with('roles');
        if(request()->ajax()){
            return datatables()->eloquent($user)
            ->addColumn('aksi', function($user){
                // $button ="<center><a href='/admin/user/".$user->id."/edit'><button class='edit btn btn-primary' id='".$user->id."'>Edit</button></a> ";
            //     $button = "<center><button class='btn btn-primary dropdown-toggle' type='button' id='dropdownMenuButton2' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Aksi</button>";
            //     $button  .= " <div class='dropdown-menu'>
            //     <a class='edit dropdown-item has-icon' href='/admin/user/".$user->id."/edit' id='".$user->id."'><i class='far fa-edit'></i> Edit</a>
            //     <a class='detail dropdown-item has-icon' href='/admin/user/".$user->id."/detail'><i class='far fa-eye'></i> Detail</a>
            //   </div>";
              $button = "<center><button class='detail btn btn-primary' data-toggle='modal' data-target='#modal-detail' id='btndetail'
              data-name='".$user->name."'
              data-phone='".$user->phone."'
              data-email='".$user->email."'
              data-first_name='".$user->first_name."'
              data-last_name='".$user->last_name."'
              >Detail</button> ";
                $button  .="<button class='hapus btn btn-danger' id='".$user->id."'>Hapus</button></center>";
                return $button;
            })
            ->rawColumns(['aksi'])
            ->make(true);
        }
        // $category = Category::select('id', 'name', 'slug')->latest()->paginate(10);
        return view('admin.user.index', compact('user'));
    }
    public function store(Request $request)
    {
        $save = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'desc' => $request->desc,
            'password' => Hash::make($request->password),
            'role_id' => 3,
        ]);
        if($save){
            return response()->json(['data'=>'success',
            'text'=>'Data berhasil disimpan'], 200);
        }else{
            return response()->json(['data'=>'failed',
            'text'=>'Data berhasil disimpan']);
        }
    }
    public function profile($id){
        $role = Role::select('id', 'name')->get();
        $user = User::select('id', 'name', 'email','role_id', 'first_name', 'last_name', 'desc', 'phone')->whereId($id)->where('id', Auth::user()->id)->firstOrFail();
        $post = DB::table('post')->where('user_id', $id)->count();
        return view('admin.profile.index', compact('role','user','post'));
    }
    public function delete(Request $request)
    {
        $id = $request->id;
        $data = User::find($id);
        $data->delete();
        return response()->json(['text' => 'berhasil dihapus'], 200);
    }
    public function update(Request $request, $id)
    {
        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'desc' => $request->desc,
            'phone' => $request->phone,
        ];
        $user = User::select('id')->whereId($id)->first();
        $user->update($data);
        if ($user) {
            return response()->json(['status' => 'success', 'msg' => 'berhasil disimpan'], 200);
        } else {
            return response()->json(['text' => 'Gagal diubah'], 422);
        }
    }
    public function showDetail(Request $request)
    {
        # code...
        $id = $request->id;
        $data = User::find($id);
        return response()->json(['data' => $data]);
    }
}
