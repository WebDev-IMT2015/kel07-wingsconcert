<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Concert;
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
            $concerts = Concert::where('kelas', 'LIKE', "%$keyword%")
                ->orWhere('kapasitas','LIKE','%'.$keyword.'%')
                ->orWhere('harga','LIKE','%'.$keyword.'%')
				->paginate($perPage);
        } else {
            $concerts = Concert::paginate($perPage);
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
        $this->validate($request, [
            'kelas' => 'required',
            'kapasitas' => 'required',
            'harga' => 'required',
            'jadwal_mulai' => 'required',
            'jadwal_selesai' => 'required',
            ]);
        
        $requestData = $request->all();


        //print_r($requestData);die();
        
        Concert::create($requestData);

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
        $concert = Concert::findOrFail($id);

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
        $concert = Concert::findOrFail($id);

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
        
        $concert = Concert::findOrFail($id);
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
        Concert::destroy($id);

        Session::flash('flash_message', 'concert deleted!');

        return redirect('concerts');
    }
}
