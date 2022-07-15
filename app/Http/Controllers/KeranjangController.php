<?php

namespace App\Http\Controllers;
use App\Models\Keranjang;

use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Keranjang::all();
        return view('keranjang.index', compact('rows'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('keranjang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'ker_id_produk' => 'required',
                'ker_harga' => 'required',
                'ker_jml' => 'required',
            ],
            [
                'ker_id_produk.required' => 'Id Produk Keranjang wajib diisi',
                'ker_harga.required' => 'Harga Keranjang Wajib diisi',
                'ker_jml.required' => 'Jumlah Keranjang wajib diisi',              
            ]
        );

       keranjang::create([
            'ker_id_produk' => $request->ker_id_produk,
            'ker_harga' => $request->ker_harga,
            'ker_jml' => $request->ker_jml,
        ]);

        return redirect('keranjang');
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
        $row = keranjang::findOrFail($id);
        return view('keranjang.edit', compact('row'));
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
        $request->validate(
            [
                'ker_id_produk' => 'required',
                'ker_harga' => 'required',
                'ker_jml' => 'required',
            ],
            [
                'ker_id_produk.required' => 'Id Produk Keranjang wajib diisi',
                'ker_harga.required' => 'Harga Keranjang Wajib diisi',
                'ker_jml.required' => 'Jumlah Keranjang wajib diisi',              
            ]
        );

        $row = keranjang::findOrFail($id);
        $row->update([
            'ker_id_produk' => $request->ker_id_produk,
            'ker_harga' => $request->ker_harga,
            'ker_jml' => $request->ker_jml,
        ]);

        return redirect('keranjang');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = keranjang::findOrFail($id);
        $row->delete();

        return redirect('keranjang');
    }
}
