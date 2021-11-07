<?php

namespace App\Http\Controllers;

use App\Detail;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class EduChampController extends Controller
{
    public function index()
    {
        return view('layouts.dashboard');
    }

    public function front()
    {
        $details = Detail::all();

        return view('layouts.front', compact('details'));
    }

    public function course_detail($id)
    {
        $details = Detail::where('id', $id)->get();
        return view('layouts.course-details', compact('details'));
    }

    public function show()
    {
        $details = Detail::all();
        return view('layouts.courses', compact('details'));
    }


    public function user_profile()
    {
        return view('layouts.user-profile');
    }

    public function teacher_profile()
    {
        return view('layouts.teacher-profile');
    }

    public function mailBox()
    {
        return view('layouts.mailbox');
    }

    public function addData()
    {
        return view('layouts.show');
    }

    public function store(Request $request)
    {
        $course_image = $request->file('image');
        $filename = null;
        if ($course_image) {
            $filename = time() . $course_image->getClientOriginalName();

            Storage::disk('public')->putFileAs(
                'images/',
                $course_image,
                $filename
            );
        }


        $detail = new Detail();
        $detail->name = $request['name'];
        $detail->email = $request['email'];
        $detail->phone = $request['phone'];
        $detail->image = $filename;
        $detail->save();
        return redirect('courses');
    }

    public function destroy($id)
    {
        $detail = Detail::find($id);
        $detail->delete();

        return redirect('courses');
    }

    public function edit($data)
    {
        $detail = Detail::findOrFail($data);
        return view('layouts.edit', compact('detail'));
    }

    public function update($id, Request $request)
    {



        $filename = null;
        $uploadedFile = $request->file('image');
        $oldfilename = $detail['image'] ?? 'demo.jpg';

        $oldfileexists = Storage::disk('public')->exists('/storage/images/' . $oldfilename);

        if ($uploadedFile !== null) {

            if ($oldfileexists && $oldfilename != $uploadedFile) {
                //Delete old file
                Storage::disk('public')->delete('storage/images/' . $oldfilename);
            }
            $filename_modified = str_replace(' ', '_', $uploadedFile->getClientOriginalName());
            $filename = time() . '_' . $filename_modified;

            Storage::disk('public')->putFileAs(
                'images/',
                $uploadedFile,
                $filename
            );

            $data['image'] = $filename;
        } elseif (empty($oldfileexists)) {
            throw new GeneralException('Course image not found!');
            //return redirect()->back()->with(['flash_danger' => 'User image not found!']);
            //file check in storage

        }


        $detail = Detail::find($request->id);
        // $detail = Detail::findOrFail($id);
        $detail->name = $request->name;
        $detail->email = $request->email;
        $detail->phone = $request->phone;
        $detail->image = $filename;
        $detail->save();

        return redirect('courses');
    }
}
