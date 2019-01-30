<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LinksController extends Controller
{


    public function index()
    {

        $links = Link::all();
        return view('laravel-links', compact('links'));
    }

    public function showLinksForm()
    {
        return view('laravel-toevoegen');
    }

    public function handleLinksForm(Request $request)
    {
        $validateData = $request->validate(
            [
                'title' => 'min:8',
                'description' => 'required',
                'url' => 'required|url'
            ]
        );

//        $targetFolder = public_path('links');
//        $fileName = str_random(16) . '.' . $validateData['links']->getClientOriginalExtension();
//
//        $validateData['photo']->move($targetFolder, $fileName);

        $links = new links();
        $links->fill([
            'title' => $validateData['title'],
            'description' => $validateData['description'],
            'url' => $validateData['url']
        ]);

        $links->save();
        return view('links-opslaan');
    }
}


