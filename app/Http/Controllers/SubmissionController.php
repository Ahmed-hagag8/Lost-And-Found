<?php

// SubmissionController.php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function index()
    {
        $submissions = Form::all(); 
        return view('submissions.index', compact('submissions'));
    }

public function destroy($id)
{
    $submission = Form::findOrFail($id);
    $submission->delete();

    return redirect()->back()->with('success', 'Submission deleted successfully.');
}
public function search(Request $request)
{
    $query = $request->input('query');

    // Fetch submissions based on search query
    $submissions = Form::where('name', 'LIKE', "%$query%")
                             ->orWhere('student_id', 'LIKE', "%$query%")
                             ->get();

    return view('submissions.index', ['submissions' => $submissions]);
}

}
