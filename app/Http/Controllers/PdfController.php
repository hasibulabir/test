<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class PdfController extends Controller
{
    public function test()
    {
       $details = [
           'name' => 'Hasibul Hasan',
           'mobile' => '+880 1521418384',
           'app_name' => 'XerOneIt',
           'address' => '168 Horogram Purbapara, Court Station, Rajshahi.',
           'order_id' => '00001',
           'item' => [
                [
                     'name' => 'Item 1',
                     'total_item' => 5,
                     'price' => 10,
                     'selected_item' => 99,
                     'total' => (10 * 99)
                ]
           ],
           'total_amount' => 990,
           'offer_amount' => 100,
           'tax' => 90,
           'transaction_amount' => 800,
      ];
  
      view()->share('data',$details);
  
      $html = view('invoice')->render();
      $pdf = App::make('dompdf.wrapper');
  
      $pdf->loadHTML($html);
  
      if(!Storage::exists(storage_path('app/public/invoice/'))) {
  
           Storage::makeDirectory(storage_path('app/public/invoice/'),0777);
      }
  
      $invoice = time().'.pdf';
  
      $pdf->save(public_path('/').$invoice);
  
     //  dd('ok');
     return view('invoice');

    }
}
