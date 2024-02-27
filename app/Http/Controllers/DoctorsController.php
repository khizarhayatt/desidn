<?php

namespace App\Http\Controllers;
use Exception;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\DoctorDetails; 
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\Paginator;


class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {

            $keyword = $request->input('keyword');

            // Query the roles table based on the keyword

            $query = User::with('doctorDetails')
            ->orderBy('id', 'ASC')
            ->where('role', User::DOC_ROLE)
            ->get();

            if (!empty($keyword)) {
                $query->where('first_name', 'like', '%' . $keyword . '%')
                    ->orWhere('last_name', 'like', '%' . $keyword . '%')
                    ->orWhere('categories', 'like', '%' . $keyword . '%');
            }

            $data['doctors'] = $query;
            return view('admin.doctors.list', $data);
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.doctors.edit'); 
        // try {} 
        //catch (\Throwable $e) {  return redirect()->back()->with('error', $e->getMessage()); }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          try {
                    
                $messages = [
                    'first_name.required' => 'The First name field is required.',
                    'last_name.required' => 'The Last name field is required.',
                    'email.required' => 'The Email field is required.',
                    'phone.required' => 'The Phone field is required.',
                    'board_certified.required' => 'The Board Certified field is required.',
                    'medical_school.required' => 'The Medical School field is required.',
                    'residency.required' => 'The Residency field is required.',
                    'fellowship.required' => 'The Fellowship field is required.',
                ];
                
                $validator = Validator::make($request->all(), [
                    'first_name' => 'required|string|max:255',
                    'last_name' => 'required|string|max:255',
                    'email' => 'required|email|unique:users',
                    'phone' => 'required|string',
                    'board_certified' => 'required|string',
                    'medical_school' => 'required|string',
                    'residency' => 'required|string',
                    'fellowship' => 'required|string',
                    'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                    'resume' => 'nullable|file|max:2048',
                    'status' => 'required|in:1,2,3',
                ], $messages);
                
            
        
                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator)->withInput();
                } 

                // Create a new user record
                $user = new User();
                $user->first_name = $request->input('first_name');
                $user->last_name = $request->input('last_name');
                $user->email = $request->input('email');
                $user->password = Hash::make($request->input('password'));
                // Assuming DOC_ROLE is defined in your User model
                $user->role = User::DOC_ROLE; 
                $user->save();

                // Create a new doctor details record
                $doctorDetails = new DoctorDetails();
                $doctorDetails->user_id = $user->id;
                $doctorDetails->phone_number = $request->input('phone');
                $doctorDetails->board_certified = $request->input('board_certified');
                $doctorDetails->medical_school = $request->input('medical_school');
                $doctorDetails->residency = $request->input('residency');
                $doctorDetails->fellowship = $request->input('fellowship');
                $doctorDetails->categories = $request->input('categories');
                $doctorDetails->resume = $request->input('resume');
                $doctorDetails->introduction = $request->input('introduction');
                $doctorDetails->signup_bonus = $request->input('signup_bonus');
                $doctorDetails->status = 0; 

                // Save the doctor details record and associate it with the user
                $user->doctorDetails()->save($doctorDetails);

                return redirect()->back()->with('success', 'User created successfully!');  
          } 
          catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //try {} 
        //catch (\Throwable $e) {  return redirect()->back()->with('error', $e->getMessage()); }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         //try {} 
        //catch (\Throwable $e) {  return redirect()->back()->with('error', $e->getMessage()); }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         //try {} 
        //catch (\Throwable $e) {  return redirect()->back()->with('error', $e->getMessage()); }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         //try {} 
        //catch (\Throwable $e) {  return redirect()->back()->with('error', $e->getMessage()); }
    }
}
