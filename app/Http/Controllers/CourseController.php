<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;

class CourseController extends Controller
{
    //api index
    public function index()
    {
        $courses = Course::with('category', 'students','user')->get();
        return response()->json($courses, 200);
    }
    //main page
    public function main()
    {
        // Total number of users with role "instructor"
        $totalInstructors = User::where('role', 'instructor')->count();

        // Total number of courses
        $totalCourses = Course::count();

        // Total number of users with role "student"
        $totalStudents = User::where('role', 'student')->count();
        // If the page exists, return a response
        return view('pages.index', [
            'totalInstructors' => $totalInstructors,
            'totalCourses' => $totalCourses,
            'totalStudents' => $totalStudents,
        ]);
    }

    //get couse by
    public function getcourse($id)
    {
        $course = Course::with('category', 'students', 'user','comments','ratings')->find($id);

        if (!$course) {
            return view('404');
        }

        // If the page exists, return a response
        return view('courses.show', ['course' => $course]);
    }

    // get course by category
    public function getbycategory($category)
    {
        if ($category=="all"){
            $course = Course::with('category', 'students','comments','ratings')->orderBy('title')->get();  
        }else{
            $course = Course::where('category_id', $category)->with('category', 'students')->orderBy('title')->get();
        }

        if (!$course) {
            return response()->json(['message' => 'No Couse available'], 404);
        }

        return response()->json($course, 200);
    }

     //store courses to database
    public function store(Request $request)
    {
        // Check if the user is authenticated
        if (Auth::check()) {
          $user = Auth::user();

            if($user->role !="instructor"){
                // Flash error message to the session
                session()->flash('error', 'Course could not be created.');
                return view('courses.create', ['error', 'Unauthorized']);
            }
        // $this->middleware('auth:sanctum');
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'category' => 'required|exists:categories,id',
            'duration' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);

        // Handle image upload
        $imagePath = null;
        if($request->hasFile('image')){
            $image = $request->file('image');
             // Resize the image
            $resizedImage = Image::make($image)->fit(270, 220);

            // Generate a unique filename
            $image_name = uniqid() . '_' . $image->getClientOriginalName();

            $image->move(public_path('/assets/img/course'),$image_name,$resizedImage->stream());
        
            $imagePath = "/assets/img/course/" . $image_name;
        }else{
            $imagePath = 'assets/img/course/banner.png'; 
        }
        // return response()->json(Auth::user()->id, 201);
        $course = Course::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'category_id' => $request->input('category'),
            'duration' => $request->input('duration'),
            'topics' => $request->input('topics'),
            'language' => $request->input('language'),
            'user_id' => $user->id,
            'image' => $imagePath,
        ]);

        // Flash success message to the session
        session()->flash('success', 'Course Created Successfully .');
        return view('courses.create');
    }else{
        // Flash error message to the session
        session()->flash('error', 'Course could not be created.');
        return view('courses.create');
        }
    }
     // get my courses
    public function mycourses()
    {

        // Check if the user is authenticated
        if (Auth::check()) {
                $user_id = Auth::user()->id;
                $course = Course::where('user_id',$user_id)->with('category', 'students','comments','ratings')->orderBy('created_at','desc')->get();  
                return response()->json($course, 200);
            if (!$course) {
                return response()->json(['error' => 'No Course available'], 404);
            }
        }else{
            return response()->json(['error' => 'Login First'], 403);
        }
       
    }

    public function update(Request $request, $id)
    {
        // Find the course
        $course = Course::findOrFail($id);

        // Check if the current user owns the course
        if (Auth::user()->id !== $course->user_id) {
            // If not, redirect with an error message
            Session::flash('error', 'You are not authorized to edit this course.');
            return redirect()->back();
        }

        // Validate the request
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'category' => 'required|exists:categories,id',
            'duration' => 'required|numeric',
            'topics' => 'required|string',
            'language' => 'required|string',
        ]);

        // Update the course
        $course->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'category_id' => $request->input('category'),
            'duration' => $request->input('duration'),
            'topics' => $request->input('topics'),
            'language' => $request->input('language'),
            'user_id' => Auth::id(),
        ]);

        // Flash a success message to the session
        Session::flash('success', 'Course updated successfully.');

        // Redirect back to the course details page or wherever you need
        return redirect()->route('courses.show', ['id' => $course->id]);
    }

    //delete course
    public function destroy($id)
    {
        // Get the authenticated user
        $user = Auth::user();
    
        $course = Course::find($id);
    
        if (!$course) {
            return response()->json(['message' => 'Course not found'], 404);
        }
    
        // Check if the authenticated user is the owner of the course
        if ($user->id !== $course->user_id) {
            return response()->json(['message' => 'Unauthorized. You are not the owner of this course.'], 403);
        }
    
        // Delete image if it exists
        if ($course->image) {
            Storage::disk('public')->delete($course->image);
        }
    
        $course->delete();
    
        return response()->json(['success' => 'Course deleted'], 200);
    }

    // Show single course
    public function show($id)
    {
        $course = Course::with('category', 'students')->find($id);

        if (!$course) {
            return response()->json(['message' => 'Course not found'], 404);
        }

        return response()->json($course, 200);
    }

        // edit course page
        public function edit($id)
        {
            $course = Course::with('category', 'students','user')->find($id);
    
            if (!$course) {
                Session::flash('error', 'Course not found');
                return redirect()->back();
            }
    
            return view('courses.edit', ['course' => $course]);
        }
 
}
