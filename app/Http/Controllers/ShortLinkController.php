<?php

namespace App\Http\Controllers;

use App\Models\ShortLink;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ShortLinkController extends Controller
{

    public function index()  
    {  
        $shortLinks = ShortLink::latest()->get();  
     
        return view('shortenLink', compact('shortLinks'));  
    }  
  
    public function store(Request $request)  
    { 

        $request->validate([  
           'link' => 'required|url|unique:short_links',
           'slink' => 'unique:short_links',
        ]);  
     
        $input['link'] = $request->link;
        $random_code=Str::random(6);
        $domain_name='Hi/';
        $short_link=$domain_name.$random_code;
        $input['slink'] = $short_link; 
        $input['code'] = $random_code;  
     
        ShortLink::create($input);  
    
        return redirect('generate-shorten-link')  
             ->with('success', 'Shorten Link Generated Successfully!');  
    }  
     
    public function shortenLink($code)  
    {  
        $find = ShortLink::where('code', $code)->first();       
        return redirect($find->link);  
        
        
        
    }
   
}
