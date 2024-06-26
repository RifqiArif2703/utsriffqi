<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Unit;
use Validator;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $titlePage = "Data Resep";
        $items = Item::all();
        return view('apps.item.index', compact('titlePage', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $titlePage = "Tambah Hewan";
        $units = Unit::all();
        return view('apps.item.add', compact('units', 'titlePage'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute belum diisi',
            'unique' => 'Kode hewan sudah digunakan',
            'numeric' => 'Inputtan harus angka'
        ];

        $validate = Validator::make($request->all(), [
            'code_item' => 'required|unique:items,code',
            'name_item' => 'required',
            'desc_item' => 'required',
            'price_item' => 'required|numeric',
            // 'stock_item' => 'required|numeric',
            // 'unit_item' => 'required'
        ], $messages);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $item = new Item;
        $item->code = $request->code_item;
        // $item->unit_id = $request->unit_item;
        $item->name = $request->name_item;
        $item->price = $request->price_item;
        $item->desc = $request->desc_item;
        // $item->stock = $request->stock_item;

        $item->save();

        return redirect()->route('item.index')->with('notif', 'Berhasil Menambah Resep');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $titlePage = "Edit Data Resep";
        $item = Item::find($id);
        $units = Unit::all();
        return view('apps.item.edit', compact('item', 'units', 'titlePage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':attribute belum diisi',
            'unique' => 'Kode Hewan sudah digunakan',
            'numeric' => 'Inputtan harus angka'
        ];

        $validate = Validator::make($request->all(), [
// 'code_item' => 'required|unique:items,code',
            'name_item' => 'required',
            'desc_item' => 'required',
            'price_item' => 'required|numeric',
        ], $messages);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $item = Item::find($id);

        // $item->code = $request->code_item;
        // $item->unit_id = $request->unit_item;
        $item->name = $request->name_item;
        $item->price = $request->price_item;
        $item->desc = $request->desc_item;
        // $item->stock = $request->stock_item;

        $item->save();

        return redirect()->route('item.index')->with('notif', 'Berhasil Mengupdate Data Resep');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Item::find($id)->delete();
        return redirect()->route('item.index')->with('notif', 'Berhasil Menghapus Data Resep');
    }
}
