<?php

namespace App\Imports;

use App\Models\Purchase;
use App\Models\Purchase_details;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\Importable;
use Throwable;

class PurchaseImport implements ToCollection , WithHeadingRow, WithValidation, SkipsOnError
{
     use Importable, SkipsErrors;
    // use SkipsErrors;
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
      foreach ($rows as $row)
      {
          // dd($row);
        $purchase = Purchase::create([

          'user_id' =>$row["mmuid"],

        ]);

        $purchase->purchase_details()->create([
          'name' => $row['name'],
          'mmu_id' => $row['mmuid'],
          'extension_number'=> $row['extension_number'],
          'faculty' => $row['faculty'],
          'format' => $row['format'],
          'campus' => $row['campus'],
          'category' => $row['category'],
          'library' => $row['library'],
          'title' => $row['title'],
          'isbn' => $row['isbn'],
          'author' => $row['author'],
          'publisher' => $row['publisher'],
          'subject_code' => $row['subject_code'],
          'quantity' => $row['quantity'],
          'total_students' => $row['total_students'],
          'price' => $row['price'],
          'status' => "pending",
          'progress_log' => "Dean Validation",
          'remark' => $row['remark'],
        ]);
      }
    }

    public function onError(Throwable $e){

    }

    public function rules(): array
    {
      return[
        '*.mmuid'=>['exists:App\Models\User,user_id'],
        '*.name'=>['exists:App\Models\User,name'],
        '*.faculty'=>['required'],
        '*.format'=>['required'],
        '*.category'=>['required'],
        '*.library'=>['required'],
        '*.title'=>['required'],
        '*.isbn'=>['required'],
        '*.author'=>['required']
      ];
    }


}
