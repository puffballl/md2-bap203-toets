<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Link;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LinksCotroller extends Controller
{

    public function index(){
        $links = DB::table('links')->get();

        return view('links\links', ['links'=>$links]);
    }

    public function showLinksForm(){
        return view('links\links-add');
    }

    public function handleLinksForm(Request $request){
        $validatedData = $request->validate(
            [
                'title' => 'required',
                'link' => 'required|url',
                'description'=>''
            ]
        );
        $link = new Link();
        $link->fill([
            'title' => $validatedData['title'],
            'link' => $validatedData['link'],
            'description' => $validatedData['description']
        ]);
        $link->save();

        return redirect()->route('links');
    }

}
