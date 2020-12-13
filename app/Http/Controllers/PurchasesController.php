<?php

namespace App\Http\Controllers;

use App\Models\Purchases;
use Illuminate\Http\Request;

class PurchasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $validated = $request->validate([
          'name' => 'required',
          'mmu_id' => 'bail|required|size:10',
          'extension_number'=> 'bail|nullable|numeric',
          'faculty' => 'required',
          'format' => 'required',
          'campus' => 'required',
          'category' => 'required',
          'library' => 'required',
          'title' => 'required',
          'isbn' => 'bail|required|min:9|max:17',
          'author' => 'required',
          'publisher' => 'required',
          'subject_code' => 'required',
          'quantity' => 'bail|required|numeric',
          'total_students' => 'bail|nullable|numeric',
          'price' => 'bail|nullable|numeric',
          'remark' => 'nullable',

        ]);

        $purchase = new Purchases();
        $purchase->name = $request->input('name');
        $purchase->mmu_id = $request->input('mmu_id');
        $purchase->extension_number = $request->input('extension_number');
        $purchase->faculty = $request->input('faculty');
        $purchase->format = $request->input('format');
        $purchase->campus = $request->input('campus');
        $purchase->category = $request->input('category');
        $purchase->library = $request->input('library');
        $purchase->title = $request->input('title');
        $purchase->isbn = $request->input('isbn');
        $purchase->author = $request->input('author');
        $purchase->publisher = $request->input('publisher');
        $purchase->subject_code = $request->input('subject_code');
        $purchase->quantity = $request->input('quantity');
        $purchase->total_students = $request->input('total_students');
        $purchase->price = $request->input('price');
        $purchase->remark = $request->input('remark');
        $purchase->save();

        return redirect('requester.request-form');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
