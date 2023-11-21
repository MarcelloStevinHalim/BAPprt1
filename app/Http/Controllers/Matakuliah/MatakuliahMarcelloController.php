<?php

namespace App\Http\Controllers\Matakuliah;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\MatakuliahMarcello;
use Illuminate\Http\Request;

class MatakuliahMarcelloController extends Controller
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
            $matakuliahmarcello = MatakuliahMarcello::where('kodeMatakuliah', 'LIKE', "%$keyword%")
                ->orWhere('matakuliah', 'LIKE', "%$keyword%")
                ->orWhere('sks', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $matakuliahmarcello = MatakuliahMarcello::latest()->paginate($perPage);
        }

        return view('matakuliah.matakuliah-marcello.index', compact('matakuliahmarcello'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('matakuliah.matakuliah-marcello.create');
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
        
        MatakuliahMarcello::create($requestData);

        return redirect('matakuliah/matakuliah-marcello')->with('flash_message', 'MatakuliahMarcello added!');
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
        $matakuliahmarcello = MatakuliahMarcello::findOrFail($id);

        return view('matakuliah.matakuliah-marcello.show', compact('matakuliahmarcello'));
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
        $matakuliahmarcello = MatakuliahMarcello::findOrFail($id);

        return view('matakuliah.matakuliah-marcello.edit', compact('matakuliahmarcello'));
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
        
        $matakuliahmarcello = MatakuliahMarcello::findOrFail($id);
        $matakuliahmarcello->update($requestData);

        return redirect('matakuliah/matakuliah-marcello')->with('flash_message', 'MatakuliahMarcello updated!');
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
        MatakuliahMarcello::destroy($id);

        return redirect('matakuliah/matakuliah-marcello')->with('flash_message', 'MatakuliahMarcello deleted!');
    }
}
