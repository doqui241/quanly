<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Thietbi;
use Illuminate\Http\Request;
use App\Http\Requests\StoreThietbiRequest;
use App\Http\Requests\UpdateThietbiRequest;

class ThietbiController extends Controller
{
    /**
     * Display all users
     * 
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $thietbi = Thietbi::latest()->paginate(5);

        return view('thietbi.thietbi', compact('thietbi'))->with('i',(request()->input('page',1 )-1)*5);
    }

    public function create() 
    {
        return view('thietbi.addtb');
    }

    public function store(Request $request) 
    {
       
        Thietbi::create($request->all());
        return redirect()->route('Thietbi.index');

    }

    public function show(Thietbi $thietbi) 
    {
        return view('thietbi.chitiettb', compact('thietbi'));
        // return view('thietbi.chitiettb');
    }


    public function edit(Thietbi $thietbi) 
    {
        return view('thietbi.edittb', compact('thietbi'));
    }

    public function update(Thietbi $thietbi, Request $request) 
    {
        $thietbi->update($request->all());

        return redirect()->route('thietbi.index')
            ->withSuccess(__('Thietbi updated successfully.'));
    }

    /**
     * Delete user data
     * 
     * @param User $user
     * 
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $users) 
    {
        $users ->delete();

        return redirect()->route('users.index')
            ->withSuccess(__('User deleted successfully.'));
    }
}