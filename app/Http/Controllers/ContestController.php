<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;

class ContestController extends Controller
{
    public function index()
    {
        return view('contests.founding-day.create');
    }

    function enter(Request $request)
    {
        $request->validate([
            'answer' => 'required|integer|between:1,3',
            'name' => 'required|string|max:200',
            'mobile' => 'regex:/^05\d{8}$/',
            'user' => 'required|string|max:200',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        $alreadyExists = Entry::where('contest_name', 'saudi_founding_day_2025')
            ->where('mobile', $request->mobile)
            ->exists();

        if ($alreadyExists) {
            session()->flash('already_entered');
            return redirect()->back();
        }

        $entry = new Entry();
        $entry->contest_name = 'saudi_founding_day_2025';
        $entry->answer = $request->input('answer');
        $entry->name = $request->input('name');
        $entry->mobile = $request->input('mobile');
        $entry->social_user = $request->input('user');
        $entry->save();

        session()->flash('success');
        return redirect()->back();
    }
}
