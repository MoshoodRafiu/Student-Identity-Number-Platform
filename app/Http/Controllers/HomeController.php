<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::latest()->get();
        return view('home', compact('users'));
    }

    public function register()
    {
        return view('register');
    }

    public function edit(User $user)
    {
        return view("edit", compact('user'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'middle_name' => ['required'],
            'email' => ['required'],
            'nationality' => ['required'],
            'phone' => ['required'],
            'gender' => ['required'],
            'address' => ['required']
        ]);


        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput()->with('error', 'Invalid input data');
        }

        // Store data
        if (User::create($request->all())) {
            return redirect()->route('home')->with('success', 'User created successfully');
        }

    }

    public function update(Request $request, User $user)
    {
        // Validate Request
        $validator = Validator::make($request->all(), [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'middle_name' => ['required'],
            'email' => ['required', 'unique:users,email,' .$user['id']],
            'nationality' => ['required'],
            'phone' => ['required'],
            'gender' => ['required'],
            'address' => ['required']
        ]);

        if ($validator->fails()){
            return back()->withErrors($validator)->withInput()->with('error', 'Invalid input data');
        }
        $userId = User::query()->where('id', $user['id'])->first();
        $data = [];
        $data['first_name'] = $request['first_name'];
        $data['last_name'] = $request['last_name'];
        $data['middle_name'] = $request['middle_name'];
        $data['email'] = $request['email'];
        $data['nationality'] = $request['nationality'];
        $data['phone'] = $request['phone'];
        $data['gender'] = $request['gender'];
        $data['address'] = $request['address'];

        // Store data
        if ($user->update($data)) {
            return redirect()->route('home')->with('success', 'User updated successfully');
        }

        return back()->with('error', 'Error updating successfully');
    }


    public function destroy(User $user)
    {
        if ($user->delete()) {
            return redirect()->route('home')->with('success', 'User deleted successfully');
        }
        return back()->with('error', 'Error deleting successfully');
    }
}
