<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
  public function destroy(Request $request)
  {
      Auth::guard('web')->logout();

      $request->session()->invalidate();

      $request->session()->regenerateToken();

      return redirect('/login');
  }

  public function Profile(){
    $id = Auth::user()->id;
    $adminData = User::find($id);

    return View('admin.admin_profile_view', compact('adminData'));
  }

  public function EditProfile(){
    $id = Auth::user()->id;
    $editData = User::find($id);

    return View('admin.admin_profile_edit', compact('editData'));

  }
  public function StoreProfile(Request $request){

    $request->validate([
      'name' => 'required',
      'email' => 'required',
    ]);

    $id = Auth::user()->id;
    $data =  User::find($id);

    $data->name = $request->name;
    $data->email = $request->email;
    $data->phone = $request->phone;

    if ($request->file('profile_image')) {
      $file = $request->file('profile_image');
      $filename = date('YmdHi').$file->getClientOriginalName();
      $file->move(public_path('upload/admin_images'), $filename);
      $data['profile_image'] = $filename;
    }
    $data->save();

    $notification = array(
      'message' => 'Perfil de administrador actualizado exitosamente',
      'alert-type' => 'success'
    );
    return redirect()->route('admin.profile')->with($notification);
  }

  public function ChangePassword(){
    return View('admin.admin_change_password');
  }

  public function UpdatePassword(Request $request){
    $validateData = $request->validate([
      'oldpassword' => 'required',
      'newpassword' => 'required',
      'confirm_password' => 'required|same:newpassword',
    ]);

    $hashedPassword = Auth::user()->password;
    if (Hash::check($request->oldpassword,$hashedPassword )) {
      $users = User::find(Auth::id());
      $users->password = bcrypt($request->newpassword);
      $users->save();
      session()->flash('message','Contraseña actualizada exitosamente');
      return redirect()->back();
    }
    else
    {
      session()->flash('message','La contraseña actual no coincide');
      return redirect()->back();
    }
  }
}
