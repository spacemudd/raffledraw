<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;

class RamadanContestController extends Controller
{
    public function index()
    {
        return view('contests.ramadan2025.create');
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

        $alreadyExists = Entry::where('contest_name', 'ramadan_2025')
            ->where('mobile', $request->mobile)
            ->exists();

        if ($alreadyExists) {
            session()->flash('already_entered');
            return redirect()->back();
        }

        $entry = new Entry();
        $entry->contest_name = 'ramadan_2025';
        $entry->answer = $request->input('answer');
        $entry->name = $request->input('name');
        $entry->mobile = $request->input('mobile');
        $entry->social_user = $request->input('user');
        $entry->save();

        session()->flash('success');
        return redirect()->back();
    }

    function draw()
    {
        $winners = Entry::where('answer', 2)
            ->orderByRaw(config('database.default') === 'sqlite' ? 'RANDOM()' : 'RAND()')
            ->take(5)
            ->get();

        return view('draw', compact('winners'));
    }

    function download()
    {
        $entries = Entry::where('contest_name', 'ramadan_2025')->toBase()->get();

        $csvFileName = 'entries.csv';
        $csvFile = fopen($csvFileName, 'w');
        $headers = array_keys((array) $entries[0]); // Get the column headers from the first row
        fprintf($csvFile, chr(0xEF).chr(0xBB).chr(0xBF));
        fputcsv($csvFile, $headers);

        foreach ($entries as $row) {
            fputcsv($csvFile, (array) $row);
        }

        fclose($csvFile);

        return Response::download(public_path($csvFileName))->deleteFileAfterSend(true);
    }
}
