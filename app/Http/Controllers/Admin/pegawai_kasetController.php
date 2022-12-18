<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\pegawai_kaset;
use Illuminate\Http\Request;

class pegawai_kasetController extends Controller
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
            $pegawai_kaset = pegawai_kaset::where('no_pegawai', 'LIKE', "%$keyword%")
                ->orWhere('nama', 'LIKE', "%$keyword%")
                ->orWhere('jam_kerja', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $pegawai_kaset = pegawai_kaset::latest()->paginate($perPage);
        }

        return view('admin.pegawai_kaset.index', compact('pegawai_kaset'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.pegawai_kaset.create');
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
        
        pegawai_kaset::create($requestData);

        return redirect('admin/pegawai_kaset')->with('flash_message', 'pegawai_kaset added!');
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
        $pegawai_kaset = pegawai_kaset::findOrFail($id);

        return view('admin.pegawai_kaset.show', compact('pegawai_kaset'));
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
        $pegawai_kaset = pegawai_kaset::findOrFail($id);

        return view('admin.pegawai_kaset.edit', compact('pegawai_kaset'));
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
        
        $pegawai_kaset = pegawai_kaset::findOrFail($id);
        $pegawai_kaset->update($requestData);

        return redirect('admin/pegawai_kaset')->with('flash_message', 'pegawai_kaset updated!');
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
        pegawai_kaset::destroy($id);

        return redirect('admin/pegawai_kaset')->with('flash_message', 'pegawai_kaset deleted!');
    }
}
