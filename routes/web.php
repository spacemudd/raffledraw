<?php

use App\Http\Controllers\ContestController;
use App\Http\Controllers\ProfileController;
use App\Models\Entry;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('contests.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('2025-founding-day-contest', [ContestController::class, 'index'])->name('contests.index');
Route::post('2025-founding-day-contest/enter', [ContestController::class, 'enter'])->name('contests.enter');


Route::post('raffle/upload', function(Request $request) {
    $file = $request->file('raffle_file');

    // Separate the entries to array.
    $lines = explode("\r\n", $file->getContent());
    $contestants = [];

    foreach ($lines as &$line) {
        $line = trim($line);
        $entry = explode(',', $line);
        $contestants[] = [
            'name' => $entry[0],
            'phone' => $entry[1],
        ];
    }

    $contestants = collect($contestants);
    dd($contestants->unique('phone')->count());
    //$d = Entry::insert($contestants);

    dd($d);

    $uniqueContestants = $contestants->unique('phone');

    dd($uniqueContestants->count());

    // Choose random 5 people.
    $winners = $uniqueContestants->random(5);

    // Display the winners.
    return view('winners', compact('winners', 'contestants', 'totalCount', 'uniqueContestants'));
})->name('raffle.upload');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
