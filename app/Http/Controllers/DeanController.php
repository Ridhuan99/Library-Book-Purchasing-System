<?php

namespace App\Http\Controllers;

use Request;
use App\Models\User;
use App\Models\Purchase;
use App\Models\Purchase_details;
use Illuminate\Support\Facades\DB;

class DeanController extends Controller
{
    public function getreqlist($faculty){
      $purchases = DB::table('purchase_details')
          ->select('purchase_id','title','quantity','created_at','status','mmu_id','name','faculty')
          ->where('progress_log','Dean Validation')
          ->where('faculty',$faculty)
          ->where('status','pending')
          ->orderBy('created_at','desc')
          ->get();
      return view('dean.current-request',['purchases' =>  $purchases]);
    }

    public function getreq($faculty,$id){
      $purchases = DB::table('purchase_details')
          ->where('faculty',$faculty)
          ->where('purchase_id',$id)
          ->get();

      $inquiries = DB::table('inquiries')
          ->where('purchase_id', $id)
          ->orderBy('created_at','asc')
          ->get();

      return view('dean.details',['purchases' =>  $purchases, 'inquiries' =>  $inquiries]);
    }

    public function gethistorylist($faculty){
      $purchases = DB::table('purchase_details')
          ->select('purchase_id','title','quantity','created_at','status','mmu_id','name','faculty')
          ->where('status','!=','pending')
          ->where('faculty',$faculty)
          ->orderBy('created_at','desc')
          ->get();
      return view('dean.history',['purchases' =>  $purchases]);
    }

    public function gethistory($faculty,$id){
      $purchases = DB::table('purchase_details')
          ->where('faculty',$faculty)
          ->where('purchase_id',$id)
          ->get();

      $inquiries = DB::table('inquiries')
          ->where('purchase_id', $id)
          ->orderBy('created_at','asc')
          ->get();

      return view('dean.historydetails',['purchases' =>  $purchases, 'inquiries' =>  $inquiries]);
    }

    public function updateall(Request $request)
    {
      dd(request()->all());
        // $purchase = Purchase_details::findOrFail($id);
        // $purchase->progress_log = "Library Validation";
        // $purchase->save();
        //
        // return redirect()->back();
        // dd($request);
    }
}
