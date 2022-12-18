<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\kaset_film;
use Illuminate\Http\Request;

class kaset_filmController extends Controller
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
            $kaset_film = kaset_film::where('kode_film', 'LIKE', "%$keyword%")
                ->orWhere('judul_film', 'LIKE', "%$keyword%")
                ->orWhere('genre_film', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $kaset_film = kaset_film::latest()->paginate($perPage);
        }

        return view('admin.kaset_film.index', compact('kaset_film'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.kaset_film.create');
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
        
        kaset_film::create($requestData);

        return redirect('admin/kaset_film')->with('flash_message', 'kaset_film added!');
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
        $kaset_film = kaset_film::findOrFail($id);

        return view('admin.kaset_film.show', compact('kaset_film'));
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
        $kaset_film = kaset_film::findOrFail($id);

        return view('admin.kaset_film.edit', compact('kaset_film'));
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
        
        $kaset_film = kaset_film::findOrFail($id);
        $kaset_film->update($requestData);

        return redirect('admin/kaset_film')->with('flash_message', 'kaset_film updated!');
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
        kaset_film::destroy($id);

        return redirect('admin/kaset_film')->with('flash_message', 'kaset_film deleted!');
    }
}
