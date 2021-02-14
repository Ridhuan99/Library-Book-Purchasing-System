<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Purchase;
use App\Models\Purchase_details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PurchasesController extends Controller
{


        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
          'name' => 'required|exists:App\Models\User,name',
          'mmu_id' => 'bail|required|size:10|exists:App\Models\User,user_id',
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
          'quantity' => 'bail|required|numeric|min:1',
          'total_students' => 'bail|nullable|numeric',
          'price' => 'bail|nullable|numeric',
          'remark' => 'nullable',

        ]);



        $purchase = new Purchase();
        $purchase->user_id = $request->input('mmu_id');
        $purchase->save();

        $purchase_detail = new Purchase_details();
        $purchase_detail->name = $request->input('name');
        $purchase_detail->mmu_id = $request->input('mmu_id');
        $purchase_detail->extension_number = $request->input('extension_number');
        $purchase_detail->faculty = $request->input('faculty');
        $purchase_detail->format = $request->input('format');
        $purchase_detail->campus = $request->input('campus');
        $purchase_detail->category = $request->input('category');
        $purchase_detail->library = $request->input('library');
        $purchase_detail->title = $request->input('title');
        $purchase_detail->isbn = $request->input('isbn');
        $purchase_detail->author = $request->input('author');
        $purchase_detail->publisher = $request->input('publisher');
        $purchase_detail->subject_code = $request->input('subject_code');
        $purchase_detail->quantity = $request->input('quantity');
        $purchase_detail->total_students = $request->input('total_students');
        $purchase_detail->price = $request->input('price');
        $purchase_detail->remark = $request->input('remark');


        $purchase->purchase_details()->save($purchase_detail);

        $request->session()->flash('status','The purchase has been submitted succesfully');

        return redirect()->route('requester.request-form');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

          // abort_if(!isset($this->post[$id]),404);
          // return view('requester.details',['post' =>  $this->posts[$id]]);
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
        $purchase = Purchase_details::findOrFail($id);
        $purchase->progress_log = $request->progress_log;
        if ($request->progress_log === 'Arrived') {
            $purchase->status = 'Accepted';
        }

        if ($request->status === 'Rejected') {
            $purchase->status = 'Rejected';
        }
        $purchase->save();

        return redirect()->back();
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
