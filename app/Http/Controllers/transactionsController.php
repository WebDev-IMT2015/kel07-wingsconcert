<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;

use App\transaction;
use App\concert;
use Illuminate\Http\Request;
use Session;

use DB;

class transactionsController extends Controller
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
            $transactions = transaction::where('id_transaksi', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $transactions = transaction::paginate($perPage);
        }

        return view('transactions.index', compact('transactions'));
    }

    public function history(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $transactions = DB::table('transactions')
            ->join('concerts', 'concerts.id_concert', '=', 'transactions.id_concert')
            //->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('transactions.*', 'concerts.*')
            ->where('transaction.id_transaksi', 'LIKE', "%$keyword%")
            ->paginate(25);
        } else {
             $transactions = DB::table('transactions')
            ->join('concerts', 'concerts.id_concert', '=', 'transactions.id_concert')
            //->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('transactions.*', 'concerts.*','transactions.created_at as tgltransaksi')
            ->paginate(25);
        }
       
        return view('transactions.history', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
      //   $concerts = array(
      //   'itemlist' =>  DB::table('concerts')->get()
      // );
        $concerts = concert::all(['id_concert', 'kelas','kapasitas','harga','jadwal_mulai','jadwal_selesai']);
        return view('transactions.create', compact('concerts'));
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
        
        //print_r($request->input('id_concert'));die();

        //transaction::create($requestData);

        if(transaction::create($requestData))
        {
            $concerts = concert::findOrFail($request->input('id_concert'));
            $concerts->kapasitas = $concerts->kapasitas - 1;
            $concerts->update();
        }

        Session::flash('flash_message', 'transaction added!');

        return redirect('transactions');
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
        $transaction = transaction::findOrFail($id);

        return view('transactions.show', compact('transaction'));
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
        $transaction = transaction::findOrFail($id);

        return view('transactions.edit', compact('transaction'));
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
        
        $transaction = transaction::findOrFail($id);
        $transaction->update($requestData);

        Session::flash('flash_message', 'transaction updated!');

        return redirect('transactions');
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
        transaction::destroy($id);

        Session::flash('flash_message', 'transaction deleted!');

        return redirect('transactions');
    }

    
}
