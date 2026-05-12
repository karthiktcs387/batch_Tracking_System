<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate(['file' => 'required|mimes:pdf,doc,docx|max:2048']);
        $file = $request->file('file');

        $filename = time().'_'.$file->getClientOriginalName();

        $file->move(public_path('uploads'), $filename);

        Job::create([
            'file_name' => $filename
        ]);

        return "File Uploaded Successfully";
    }

    public function index()
    {
        $jobs = Job::all();

        return view('jobs', compact('jobs'));
    }
    public function delete($id)
    {
        $job = Job::find($id);
        unlink(public_path('uploads/'.$job->file_name));
        $job->delete();
        return redirect('/jobs');
    }
    public function complete($id)
    {
        $job = Job::find($id);
        $job->status = 'completed';
        $job->save();
        return redirect('/jobs');
    }
}