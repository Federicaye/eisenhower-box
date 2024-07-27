<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = Auth::id();
        $goals = Goal::where('user_id', $id);
        return view('admin.goals.index', compact('goals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.goals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id = Auth::id();
        $form_data = $request->all();
        $form_data['user_id'] = $id;
        if ($request->hasFile('image'))
        $name = $request->image->getClientOriginalName();
        $path = Storage::putFileAs('goal_images', $request->image, $name);
        $form_data['image'] = $path;
        $new_goal = Goal::create($form_data);
        return view('admin.goals.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Goal $goal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Goal $goal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Goal $goal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Goal $goal)
    {
        //
    }
}
