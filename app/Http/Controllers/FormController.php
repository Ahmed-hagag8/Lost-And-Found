<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Hash;


class FormController extends Controller
{
    public function nmu ()
    {
        return view('/nmu');
    }    
    public function nmuarabic()
    {
        return view('/nmuarabic');
    }  
    




    // public function create_form(Request $request)
    // {
    //         // Validate the uploaded image
    // $request->validate([
    //     'deposited_item' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // max 2MB
    // ]);
    // // Get the image file from the form
    // $image = $request->file('deposited_item');

    // // Generate a unique name for the image
    // $imageName = time().'.'.$image->extension();

    // // Move the uploaded image to the public/images directory
    // $image->move(public_path('images'), $imageName);
    //     $save = new form;
    //     $save->name = trim($request->name);
    //     $save->faculty = trim($request->faculty);
    //     $save->student_id = trim($request->student_id);
    //     $save->phone_number = trim($request->phone_number);
    //     $save->deposited_item = $imageName;
    //     $save->save();

    //     return redirect('/nmu')->with('success', 'Form submitted successfully');
    // }

        // Validate the form data including the uploaded image
        public function create_form(Request $request)
        {
            
            $request->validate([
                'name' => 'required|string|max:255',
                'faculty' => 'required|string|max:255',
                'student_id' => 'required',
                'phone_number' => 'required',
                //'deposited_item' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // max 2MB
                'deposited_item' => 'required|image|mimes:jpeg,png,jpg,gif', // max 2MB
            ]);
            // dd($request);
    
            // Handle file upload
            if ($request->hasFile('deposited_item')) {
                $image = $request->file('deposited_item');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
    
                // Move the uploaded image to the public/images directory
                $image->move(public_path('images'), $imageName);
    
                // Create a new form record
                $form = new Form();
                $form->name = $request->input('name');
                $form->faculty = $request->input('faculty');
                $form->student_id = $request->input('student_id');
                $form->phone_number = $request->input('phone_number');
                $form->deposited_item = $imageName; // Store the image filename
                // dd($form);
                $form->save();
    
                return redirect('/nmu')->with('success', 'Form submitted successfully');
            } else {
                return back()->with('error', 'Failed to upload image');
        }
       






    }
}