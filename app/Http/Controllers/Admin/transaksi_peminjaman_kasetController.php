<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\transaksi_peminjaman_kaset;
use Illuminate\Http\Request;

class transaksi_peminjaman_kasetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $transaksi_peminjaman_kaset = transaksi_peminjaman_kaset::where('no_transaksi', 'LIKE', "%$keyword%")
                ->orWhere('pembayaran', 'LIKE', "%$keyword%")
                ->orWhere('tgl_pinjam', 'LIKE', "%$keyword%")
                ->orWhere('tgl_pengembalian', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $transaksi_peminjaman_kaset = transaksi_peminjaman_kaset::latest()->paginate($perPage);
        }

        return view('admin.transaksi_peminjaman_kaset.index', compact('transaksi_peminjaman_kaset'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.transaksi_peminjaman_kaset.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        transaksi_peminjaman_kaset::create($requestData);

        return redirect('admin/transaksi_peminjaman_kaset')->with('flash_message', 'transaksi_peminjaman_kaset added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $transaksi_peminjaman_kaset = transaksi_peminjaman_kaset::findOrFail($id);

        return view('admin.transaksi_peminjaman_kaset.show', compact('transaksi_peminjaman_kaset'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $transaksi_peminjaman_kaset = transaksi_peminjaman_kaset::findOrFail($id);

        return view('admin.transaksi_peminjaman_kaset.edit', compact('transaksi_peminjaman_kaset'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $transaksi_peminjaman_kaset = transaksi_peminjaman_kaset::findOrFail($id);
        $transaksi_peminjaman_kaset->update($requestData);

        return redirect('admin/transaksi_peminjaman_kaset')->with('flash_message', 'transaksi_peminjaman_kaset updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        transaksi_peminjaman_kaset::destroy($id);

        return redirect('admin/transaksi_peminjaman_kaset')->with('flash_message', 'transaksi_peminjaman_kaset deleted!');
    }
}
