<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Info;
use App\Models\Localite;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class InfoController extends Controller
{

    /**
     * @param Request $request
     * @param Info $info
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(Info $info){
        $infos = Info::all();
        $localites = Localite::all();
        return view('dashboard.info.create',compact('info','infos','localites'));
    }

    /**
     * @param Request $request
     * @param Info $info
     */
    public function store(Request $request,Info $info){
        $validated = $request->validate([
            'localite_id' => 'required|exists:localites,id',
            'info' => 'required'
        ]);
        $validated = Arr::add($validated, 'info_id',$info->id);
        $validated = Arr::add($validated, 'user_id',auth()->user()->id);
        Content::create($validated);
        return redirect()->route('dashboard.info.show',compact('info'));
    }

    /**
     * @param Info $info
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Info $info){
        $infos = Info::all();
        $contents = $info->contents;
        return view('dashboard.info.show',compact('info','infos','contents'));
    }
}
