<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auth_user = Auth::user();

        $skills = Skill::all();
        return view('admin.skill.index', compact('skills','auth_user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $auth_user = Auth::user();

        return view('admin.skill.create','auth_user');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'color' => 'required|min:7',
            'percent' => 'required|numeric|gt:0|lte:100',
        ]);
        Skill::create($validated);
        return to_route('admin.skill.index')->with('message','New skill Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        $auth_user = Auth::user();

        return view('admin.skill.edit', compact('skill','auth_user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'color' => 'required|min:7',
            'percent' => 'required|numeric|gt:0|lte:100',
        ]);
        $skill-> update($validated);
        return to_route('admin.skill.index')->with('message', 'Skill Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        $skill -> delete();
        return back()->with('message', 'Skill Deleted');
    }
}
