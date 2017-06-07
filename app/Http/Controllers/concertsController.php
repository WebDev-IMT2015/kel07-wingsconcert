<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\concert;
use Illuminate\Http\Request;
use Session;

class concertsController extends Controller
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
            $concerts = concert::where('id_concert', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $concerts = concert::paginate($perPage);
        }

        return view('concerts.index', compact('concerts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('concerts.create');
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
        
        concert::create($requestData);

        Session::flash('flash_message', 'concert added!');

        return redirect('concerts');
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
        $concert = concert::findOrFail($id);

        return view('concerts.show', compact('concert'));
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
        $concert = concert::findOrFail($id);

        return view('concerts.edit', compact('concert'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $concert = concert::findOrFail($id);
        $concert->update($requestData);

        Session::flash('flash_message', 'concert updated!');

        return redirect('concerts');
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
        concert::destroy($id);

        Session::flash('flash_message', 'concert deleted!');

        return redirect('concerts');
    }
}
