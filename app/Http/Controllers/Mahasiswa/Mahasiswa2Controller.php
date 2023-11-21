<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Mahasiswa2;
use Illuminate\Http\Request;

class Mahasiswa2Controller extends Controller
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
            $mahasiswa2 = Mahasiswa2::where('studentID', 'LIKE', "%$keyword%")
                ->orWhere('nama', 'LIKE', "%$keyword%")
                ->orWhere('jurusan', 'LIKE', "%$keyword%")
                ->orWhere('tahunMasuk', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $mahasiswa2 = Mahasiswa2::latest()->paginate($perPage);
        }

        return view('mahasiswa.mahasiswa2.index', compact('mahasiswa2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('mahasiswa.mahasiswa2.create');
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
        
        Mahasiswa2::create($requestData);

        return redirect('mahasiswa/mahasiswa2')->with('flash_message', 'Mahasiswa2 added!');
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
        $mahasiswa2 = Mahasiswa2::findOrFail($id);

        return view('mahasiswa.mahasiswa2.show', compact('mahasiswa2'));
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
        $mahasiswa2 = Mahasiswa2::findOrFail($id);

        return view('mahasiswa.mahasiswa2.edit', compact('mahasiswa2'));
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
        
        $mahasiswa2 = Mahasiswa2::findOrFail($id);
        $mahasiswa2->update($requestData);

        return redirect('mahasiswa/mahasiswa2')->with('flash_message', 'Mahasiswa2 updated!');
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
        Mahasiswa2::destroy($id);

        return redirect('mahasiswa/mahasiswa2')->with('flash_message', 'Mahasiswa2 deleted!');
    }
}
