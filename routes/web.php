<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('raffle/upload', function(Request $request) {
    $file = $request->file('raffle_file');

    dd($file->getContent());
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

    $contestants = Collection::make($contestants);
    $totalCount = $contestants->count();
    $uniqueContestants = $contestants->unique('phone');

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
