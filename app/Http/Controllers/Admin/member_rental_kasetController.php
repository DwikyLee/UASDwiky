<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\member_rental_kaset;
use Illuminate\Http\Request;

class member_rental_kasetController extends Controller
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
            $member_rental_kaset = member_rental_kaset::where('no_member', 'LIKE', "%$keyword%")
                ->orWhere('nama', 'LIKE', "%$keyword%")
                ->orWhere('alamat', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $member_rental_kaset = member_rental_kaset::latest()->paginate($perPage);
        }

        return view('admin.member_rental_kaset.index', compact('member_rental_kaset'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.member_rental_kaset.create');
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
        
        member_rental_kaset::create($requestData);

        return redirect('admin/member_rental_kaset')->with('flash_message', 'member_rental_kaset added!');
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
        $member_rental_kaset = member_rental_kaset::findOrFail($id);

        return view('admin.member_rental_kaset.show', compact('member_rental_kaset'));
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
        $member_rental_kaset = member_rental_kaset::findOrFail($id);

        return view('admin.member_rental_kaset.edit', compact('member_rental_kaset'));
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
        
        $member_rental_kaset = member_rental_kaset::findOrFail($id);
        $member_rental_kaset->update($requestData);

        return redirect('admin/member_rental_kaset')->with('flash_message', 'member_rental_kaset updated!');
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
        member_rental_kaset::destroy($id);

        return redirect('admin/member_rental_kaset')->with('flash_message', 'member_rental_kaset deleted!');
    }
}
