<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function createForm()
    {
        return view('admin.create_form');
    }

    public function storeForm(Request $request)
    {
        $form = Form::create($request->all());

        // Dispatch the email notification job
        \App\Jobs\SendFormCreatedNotification::dispatch($form);

        return redirect()->route('admin.dashboard')->with('success', 'Form created successfully!');
    }
}
