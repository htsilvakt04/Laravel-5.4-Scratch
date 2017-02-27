<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;


class RegistrationController extends Controller
{
    public function create()
    {
      return view("registrations.create");
    }

    public function store(RegistrationRequest $request)
    {
      $request->persist();
      session()->flash("message", "Thanks for sign in, You are all set");
      return redirect("/");
    }
}
