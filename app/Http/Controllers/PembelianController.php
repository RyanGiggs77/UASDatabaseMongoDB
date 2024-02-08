<?php

namespace App\Http\Controllers;
use App\Models\Pembelian;

use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function index(Request $request)
    {
        $pembelian = Pembelian::paginate(5);

        if ($request->expectsJson()) {
            return response()->json($pembelian);
        }
    
        return view('pembelian.index', ['pembelian' => $pembelian]);
    }
    public function create()
    {
        return view('pembelian.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'id_pembelian' => 'required|unique:pembelian',
            'nama_pembeli' => 'required',
            'nama_barang' => 'required',
            'jumlah_barang' => 'required',
            'harga_barang' => 'required',
            'total_harga' => 'required',
            'metode_pembayaran' => 'required',
            'tanggal_pembelian' => 'required',
            'status_pembelian' => 'required',
            'alamat_pembeli' => 'required',
        ]);

        if($request->expectsJson()) {
            $pembelian = Pembelian::create($request->all());
            return response()->json([
                'message' => 'Pembelian berhasil ditambahkan',
                'data' => $pembelian
            ]);
        }

        Pembelian::create($request->all());
        return redirect()->route('pembelian.index')
            ->with('success', 'Pembelian created successfully.');
    }

    public function show($id)
    {
        $pembelian = Pembelian::find($id);

        if (request()->expectsJson()) {
            return response()->json($pembelian);
        }
        
        return view('pembelian.show',compact('pembelian'));
    }

    public function edit($id)
    {
        $pembelian = Pembelian::find($id);
        return view('pembelian.index',compact('pembelian'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'nama_pembeli' => 'required',
            'nama_barang' => 'required',
            'jumlah_barang' => 'required',
            'harga_barang' => 'required',
            'total_harga' => 'required',
            'metode_pembayaran' => 'required',
            'tanggal_pembelian' => 'required',
            'status_pembelian' => 'required',
            'alamat_pembeli' => 'required',
        ]);

        $pembelian = Pembelian::find($id)->update([
            'nama_pembeli' => $request->nama_pembeli,
            'nama_barang' => $request->nama_barang,
            'jumlah_barang' => $request->jumlah_barang,
            'harga_barang' => $request->harga_barang,
            'total_harga' => $request->total_harga,
            'metode_pembayaran' => $request->metode_pembayaran,
            'tanggal_pembelian' => $request->tanggal_pembelian,
            'status_pembelian' => $request->status_pembelian,
            'alamat_pembeli' => $request->alamat_pembeli,
        ]);

        $pembelian = Pembelian::find($id);

        if ($request->expectsJson()) {
            return response()->json([
                'message' => 'Pembelian berhasil diupdate',
                'data' => $pembelian
            ]);
        }

        return redirect()->route('pembelian.index')
            ->with('success', 'Pembelian updated successfully');
    }

    public function destroy($id)
    {
        Pembelian::find($id)->delete();

        if(request()->expectsJson()) {
            return response()->json([
                'message' => 'Pembelian berhasil dihapus'
            ]);
        }
        return redirect()->route('pembelian.index')
            ->with('success','Pembelian deleted successfully');
    }
}
