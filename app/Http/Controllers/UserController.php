<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller {
  public function index() {
    $users = User::all();
    return view('pages.userlist')->with('users', $users);
  }

  public function delete(Request $request) {
    // die(print_r($request->id));
    User::where('id', $request->id)->delete();
    return redirect('register');
  }
}