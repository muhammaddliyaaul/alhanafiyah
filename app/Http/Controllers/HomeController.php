<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $home = Produk::paginate(1);
        return view('home', compact('home'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        Produk::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'kategori' => $request->kategori,
            'status' => $request->status,
        ]);

        Session::flash('alert_message', 'Data Anda Berhasil di Tambahkan.');
        return redirect('home');
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

    public function hapus($id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        return redirect('/home');
    }

    public function hapusAll(Request $request)
    {
        $ids = $request->ids;
        Produk::whereIn('id',$ids)->delete();
        return response()->json(['success'=>"Data Berhasil di Delete"]);
    }
}
