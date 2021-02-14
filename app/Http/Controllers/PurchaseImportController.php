<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\PurchaseImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class PurchaseImportController extends Controller
{
    // public function store(Request $request){
    //
    //   $file = $request->file('file');
    //   Excel::import(new PurchaseImport, $file);
    //   $request->session()->flash('status','The purchase has been submitted succesfully');
    //
    //   return redirect()->back();
    //
    // }

    public function store(Request $request){

      $file = $request->file('file')->store('import');
      $import = new PurchaseImport;
      $import->import($file);
      $request->session()->flash('status','The purchase has been submitted succesfully');

      return redirect()->back();

    }


}
