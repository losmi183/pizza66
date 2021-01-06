<?php

namespace App\Http\Controllers;

use App\Models\Action;
use Illuminate\Http\Request;

class ActionsController extends Controller
{
    public function __construct()
    {
        return $this->middleware('admin');
    }

    public function index()
    {
        $actions = Action::orderBy('status', 'ASC')->paginate(20);

        return view('admin.actions.index', compact('actions'));
    }

    public function create()
    {
        return view('admin.actions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'max:255',
            'old_price' => 'max:255',
            'new_price' => 'max:255',
            'description' => 'max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ]);



        // $path = $request->file('image')->store('img');
        $path = $request->file('image')->store('img/actions');

        Action::create([
            'name' => $request->name ?? $request->name,
            'old_price' => $request->old_price ?? $request->old_price,
            'new_price' => $request->new_price ?? $request->new_price,
            'description' => $request->description ?? $request->description,
            'image' => $path
        ]);

        return redirect()->route('actions');
    }

    public function changeStatus(Request $request, Action $action)
    {
        $action->status = $request->status;
        $action->save();

        return back();
    }

    public function destroy(Action $action)
    {
        $action->delete();

        return back();
    }


}
