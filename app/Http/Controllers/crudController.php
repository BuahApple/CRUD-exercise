<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\crud_pemasukan;

class crudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $crud_pemasukan = crud_pemasukan::all()->toArray();
        return view('crud_pemasukans.index', compact('crud_pemasukan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('crud_pemasukans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $crudbarang = $this->validate(request(), [
            'jenis_barang' => 'required',
            'nama_barang' => 'required',
            'kode_barang' => 'required',
            'merk_barang' => 'required',
            'jml_barang' => 'required|numeric'
            ]);

        crud_pemasukan::create($crudbarang);

        return back()->with('success', 'Barang berhasil diinput!');
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
        //
        $crud_pemasukan = crud_pemasukan::find($id);
        return view('crud_pemasukans.edit', compact('crud_pemasukan', 'id'));
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
        //
        $crud_pemasukan = crud_pemasukan::find($id);
        $this->validate(request(), [
            'jenis_barang' => 'required',
            'nama_barang' => 'required',
            'kode_barang' => 'required',
            'merk_barang' => 'required',
            'jml_barang' => 'required|numeric'
            ]);
        $crud_pemasukan->jenis_barang = $request->get('jenis_barang');
        $crud_pemasukan->nama_barang = $request->get('nama_barang');
        $crud_pemasukan->kode_barang = $request->get('kode_barang');
        $crud_pemasukan->merk_barang = $request->get('merk_barang');
        $crud_pemasukan->jml_barang = $request->get('jml_barang');
        $crud_pemasukan->save();
        return redirect('crud_pemasukans')->with('success', 'Barang telah diupdate!');
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
        $crud_pemasukan = crud_pemasukan::find($id);
        $crud_pemasukan->delete();
        return redirect('crud_pemasukans')->with('success', 'Barang telah dihapus!');
    }
}
