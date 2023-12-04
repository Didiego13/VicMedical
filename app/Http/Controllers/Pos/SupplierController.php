<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use Auth;
use Illuminate\Support\Carbon;

class SupplierController extends Controller
{
  public function SupplierAll(){
    $suppliers = Supplier::orderBy('id', 'desc')->get();
    return view('backend.supplier.supplier_all',compact('suppliers'));
  }

  public function SupplierAdd(){
    return view('backend.supplier.supplier_add');
  }

  public function SupplierStore(Request $request){
    $request->validate([
      'name' => 'required',
      'email' => 'required',
      'store_name' => 'required',
      'country' => 'required',
    ]);

    Supplier::insert([
      'name' => $request->name,
      'email' => $request->email,
      'store_name' => $request->store_name,
      'country' => $request->country,
      'created_by' => Auth::user()->id,
      'created_at' => Carbon::now(),
    ]);

    $notification = array(
      'message' => 'Proveedor registrado exitosamente',
      'alert-type' => 'success'
    );
    return redirect()->route('supplier.all')->with($notification);
  }

  public function SupplierEdit($id){
    $supplier = Supplier::findOrFail($id);
    return view('backend.supplier.supplier_edit', compact('supplier'));
  }

  public function SupplierUpdate(Request $request){
    $request->validate([
      'name' => 'required',
      'email' => 'required',
      'store_name' => 'required',
      'country' => 'required',
    ]);

    $supplier_id = $request->id;
    Supplier::findorFail($supplier_id)->update([
      'name' => $request->name,
      'email' => $request->email,
      'store_name' => $request->store_name,
      'country' => $request->country,
      'updated_by' => Auth::user()->id,
      'updated_at' => Carbon::now(),
    ]);

    $notification = array(
      'message' => 'Proveedor actualizado exitosamente',
      'alert-type' => 'success'
    );
    return redirect()->route('supplier.all')->with($notification);
  }

  public function SupplierDelete($id){
    Supplier::findOrFail($id)->delete();

    $notification = array(
      'message' => 'Proveedor eliminado exitosamente',
      'alert-type' => 'info'
    );
    return redirect()->back()->with($notification);
  }
}
