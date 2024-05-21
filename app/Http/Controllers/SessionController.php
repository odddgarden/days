<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function index() {
        $picture = Picture::latest()->first();

        $user = Auth::user();
        $date = Carbon::now()->format('m');
        $now = Carbon::now();
        $createdAt = $user->created_at;
        $diff = $createdAt->diffInDays($now);

        switch ($date) {
            case '01':
                $month = 'january';
                break;
            case '02':
                $month = 'february';
                break;
            case '03':
                $month = 'march';
                break;
            case '04':
                $month = 'april';
                break;
            case '05':
                $month = 'may';
                break;
            case '06':
                $month = 'june';
                break;
            case '07':
                $month = 'july';
                break;
            case '08':
                $month = 'august';
                break;
            case '09':
                $month = 'september';
                break;
            case '10':
                $month = 'october';
                break;
            case '11':
                $month = 'november';
                break;
            case '12':
                $month = 'december';
                break;
            default:
                $month = '';
        }

        return view('user.profile', compact('user', 'month', 'diff', 'picture'));
    }
    

    public function store() {
        $attr = request()->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);
        

        if (! Auth::attempt($attr)) {
            throw ValidationException::withMessages([
                'error' => 'wrong username or password'
            ]);
        };

        request()->session()->regenerate();

        return redirect('/profile');
    }

    public function updateBio() {
        $user = Auth::user();

        $user->update(['bio' => request('bio')]);

        return redirect('/profile');
    }

    public function updateProfilePicture(Request $request) {
        $user = Auth::user();
        
        // Check if a file is uploaded
        if ($request->hasFile('profile_picture')) {
            $image = $request->file('profile_picture');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            
            // Move the uploaded file to public/uploads/images directory
            $image->move(public_path('uploads/images'), $imageName);
            
            // Update user's profile picture
            $user->update(['profile_picture' => $imageName]);
        }
    
        return redirect('/profile');
    }

    public function upload(Request $request) {
        // Check if a file is uploaded
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            
            // Move the uploaded file to public/uploads/images directory
            $image->move(public_path('uploads/images'), $imageName);
            
            // Create a new Picture record
            Picture::create([
                'picture' => $imageName,
                'user_id' => auth()->user()->id, // Assuming you're using authentication
            ]);
        }    

        return redirect('/profile');

    }


    public function destroy() {
        
        Auth::logout();

        return redirect('/');
    }
}
