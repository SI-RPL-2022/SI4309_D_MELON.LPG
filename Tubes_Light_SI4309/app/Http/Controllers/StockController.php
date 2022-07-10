<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = Stock::all();
        return view('stocks.index', [
            'stocks' => $stocks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stocks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',

        ]);

        $validator['stock'] = $request->get('stock');
        $validator['image'] = "foto/no-picture.png";

        if ($request->hasFile('image')) {
            $validator['image'] = $request->file('image')->store('foto', 'public');
        }

        Stock::create($validator);

        return redirect()->route('stocks.create')->with('status', "Berhasil Menambah Stok Gas LPG");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stock = Stock::findOrFail($id);

        return view('stocks.edit', [
            'stock' => $stock
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $stock = Stock::findOrFail($id);
        $request->validate([
            'name' => 'required',

        ]);

        $stock->name = $request->get('name');
        $stock->stock = $request->get('stock');

        if ($request->hasFile('image')) {
            if ($stock->image !== 'foto/no-picture.png') {
                Storage::delete('public' . $stock->image);
            }
            $stock->image = $request->file('image')->store('foto', 'public');
        }

        $stock->save();

        return redirect()->route('stocks.edit', [$id])->with('status', "Berhasil Update Stok Gas LPG");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Stock::where('id', $id)->delete();

        return redirect()->route('stocks.index')->with('status','Data Berhasil Dihapus');
    }
}
