<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Form::get();
        return view('admin.form.index', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $result = Form::get();

        return view('admin.form.create', compact('result'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'form_name' => 'required',

            ],
            [
                'form_name.required' => 'Title is required',

            ]
        );

        $input = $request->all();

        $success = Form::create($input);

        if ($success) {
            return redirect()->back()->with('success', 'Form Added Successfully');
        } else {
            return redirect()->back()->with('error', 'Try Again');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Form $form)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $result  = Form::find($id);
        return view('admin.form.edit', compact('result'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $validated = $request->validate(
            [
                'form_name' => 'required',

            ],
            [
                'form_name.required' => 'Title is required',

            ]
        );

        $input = $request->all();

        $inputs = Form::find($id);

        $success = $inputs->update($input);
        if ($success) {

            return redirect('form')->with('success', ' Form Updated Successfully');
        } else {
            return back()->with('error', 'Try Again');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $input = Form::find($id);
        $success = $input->delete();
        if ($success) {
            return back()->with('danger', 'Form Deleted Successfully');
        } else {
            return back()->with('error', 'Try Again');
        }
    }



    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'job' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        // Handle file upload

        $data = [
            'subject' => 'New Job Message Received',
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'job' => $request->job,
            'message' => $request->message,
        ];
         // Send email to the admin
    Mail::send('emails.job', $data, function ($message) use ($data) {
        $message->to('sanjusanjay328@gmail.com');
        $message->subject($data['subject']);
    });

    // Send thank you email to the user
    Mail::send('emails.thankyou', ['name' => $request->name], function ($message) use ($request) {
        $message->to($request->email);
        $message->subject('Thank you for contacting us');
    });

    session()->flash('messages', 'Thank you for contacting us');

    return redirect()->back();
    }
}
