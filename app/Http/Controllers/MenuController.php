<?php

namespace App\Http\Controllers;
use App\Menu;
use DB;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title='Menu';
        $menu=Menu::paginate(5);
        return view('admin.menu',compact('title','menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Input Menu';
        return view('admin.inputmenu',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'requieed'=> 'Kolom: Huruf Harus lengkap',
            'date'=>'Kolom Tanggal Harus Lengkap',
            'numeric'=>'Kolom harus Nomor',
        ];
       $validasi = $request->validate([
        'nama' => 'required',
        'stok' => 'numeric',
        'status' => 'required',
        'harga' => 'numeric'
       ],$messages);
        Menu::create($validasi);
        return redirect('menu');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title='Input Menu';
        $menu=Menu::find($id);
        return view('admin.inputmenu',compact('title','menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $messages = [
            'requieed'=> 'Kolom: Huruf Harus lengkap',
            'date'=>'Kolom Tanggal Harus Lengkap',
            'numeric'=>'Kolom harus Nomor',
        ];
       $validasi = $request->validate([
        'nama' => 'required',
        'stok' => 'numeric',
        'status' => 'required',
        'harga' => 'numeric'
       ],$messages);
        Menu::where('id_menu',$id)->update($validasi);
        return redirect('menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Menu::where('id_menu',$id)->delete();
        return redirect('menu')->with('success','Data Terhapus');
    }
}
