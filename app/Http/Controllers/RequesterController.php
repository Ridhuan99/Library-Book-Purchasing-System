<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Purchase;
use App\Models\Inquiry;
use App\Models\Purchase_details;
use Illuminate\Support\Facades\DB;

class RequesterController extends Controller
{

    public function getreqlist($mmu_id){

      $purchases = DB::table('purchase_details')
          ->select('purchase_id','title','quantity','created_at','status','mmu_id')
          ->where('mmu_id', $mmu_id)
          ->where('status','pending')
          ->get();

      return view('requester.myrequest',['purchases' =>  $purchases]);
    }

    public function getreq($mmu_id,$id){
      $purchases = DB::table('purchase_details')
          ->where('mmu_id', $mmu_id)
          ->where('purchase_id', $id)
          ->get();

      $inquiries = DB::table('inquiries')
          ->where('purchase_id', $id)
          ->orderBy('created_at','asc')
          ->get();

      return view('requester.request-details',['purchases' =>  $purchases, 'inquiries' =>  $inquiries]);
    }

    public function gethistorylist($mmu_id){

      $purchases = DB::table('purchase_details')
          ->select('purchase_id','title','quantity','status','created_at','mmu_id')
          ->where('mmu_id', $mmu_id)
          ->where('status','!=','pending')
          ->get();
      return view('requester.history',['purchases' =>  $purchases]);
    }

    public function gethistory($mmu_id,$id){

      $purchases = DB::table('purchase_details')
          ->where('mmu_id', $mmu_id)
          ->where('purchase_id', $id)
          ->get();

      $inquiries = DB::table('inquiries')
          ->where('purchase_id', $id)
          ->orderBy('created_at','asc')
          ->get();

      return view('requester.history-details',['purchases' =>  $purchases, 'inquiries' =>  $inquiries]);
    }

    public function getformat(){

      $formats = DB::table('formats')
          ->get();
      return view('requester.request-form',['formats' =>  $formats]);
    }

}
