<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    function index() {
        $s['users'] = user::all();
        return view('admin.users.index',$s);
    }
    function create(){
        return view('admin.users.create');
    }
    function store(Request $req){

        $user = new user();

       if($req->hasFile('image')){
        $image = $req->file('image');
        $path = $image->store('user/image','public');
        $user->image = $path;
    }
    if($req->hasFile('cover_image')){
        $image = $req->file('cover_image');
        $path = $image->store('user/cover_image','public');
        $user->cover_image = $path;
    }

        $user->name =$req->name;
        $user->email =$req->email;
        $user->role =$req->role;
        $user->billing_address = json_encode($req->billing_address);
        $user->shipping_address = json_encode($req->shipping_address);
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect()->route('user.index');
}
function edit($id){
    $s['user'] = user::findOrFail($id);
    return view('admin.users.edit',$s);
}


function update(Request $req,$id){
    $user = user::findOrFail($id);

       if($req->hasFile('image')){
        $image = $req->file('image');
        $path = $image->store('user/image','public');
        $this->fileDelete($user->image);
        $user->image = $path;
    }
    if($req->hasFile('cover_image')){
        $image = $req->file('cover_image');
        $path = $image->store('user/cover_image','public');
        $this->fileDelete($user->image);
        $user->cover_image = $path;
    }

        $user->name =$req->name;
        $user->email =$req->email;
        $user->role =$req->role;
        $user->billing_address = json_encode($req->billing_address);
        $user->shipping_address = json_encode($req->shipping_address);
        $user->password = Hash::make($req->password);
        $user->update();
        return redirect()->route('user.index');

}

function status($id){
    $user= user::findOrFail($id);
    $user->status=$this->changeStatus($user->status);
    $user->save();
    return redirect()->back();

}

}
