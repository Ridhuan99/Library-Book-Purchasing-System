<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Purchase;
use App\Models\Purchase_details;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
  public function getreqlist(){
    $purchases = DB::table('purchase_details')
        ->select('purchase_id','title','quantity','created_at','status','mmu_id','name','faculty')
        ->where('progress_log','!=','Dean Validation')
        ->where('status','pending')
        ->orderBy('created_at','desc')
        ->get();
    return view('admin.current-request',['purchases' =>  $purchases]);
  }

  public function getreq($id){
    $purchases = DB::table('purchase_details')
        ->where('purchase_id',$id)
        ->get();

    $inquiries = DB::table('inquiries')
        ->where('purchase_id', $id)
        ->orderBy('created_at','asc')
        ->get();

    return view('admin.details',['purchases' =>  $purchases, 'inquiries' =>  $inquiries]);
  }

  public function gethistorylist(){
    $purchases = DB::table('purchase_details')
        ->select('purchase_id','title','quantity','created_at','status','mmu_id','name','faculty')
        ->where('progress_log','!=','Dean Validation')
        ->where('status','!=','pending')
        ->orderBy('created_at','desc')
        ->get();
    return view('admin.history',['purchases' =>  $purchases]);
  }

  public function gethistory($id){
    $purchases = DB::table('purchase_details')
        ->where('purchase_id',$id)
        ->get();

    $inquiries = DB::table('inquiries')
        ->where('purchase_id', $id)
        ->orderBy('created_at','asc')
        ->get();

    return view('admin.historydetails',['purchases' =>  $purchases, 'inquiries' =>  $inquiries]);
  }

  public function getformat(){
    $formats = DB::table('formats')
        ->get();
    return view('admin.edit-form',['formats' =>  $formats]);
  }
}
