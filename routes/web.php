<?php

use App\Http\Controllers\ContestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RamadanContestController;
use App\Models\Entry;
use Carbon\Carbon;
use IcehouseVentures\LaravelChartjs\Facades\Chartjs;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('contests.index');
});

Route::get('/kpi8OwoL4cNuw', function () {
    $totalCount = Entry::count();
    $lastEntry = Entry::latest()->first();
    $correctEntries = Entry::where('answer', 2)->count();


    $entries = Entry::selectRaw('DATE(created_at) as date, COUNT(*) as count')
        ->groupBy('date')
        ->orderBy('date', 'ASC')
        ->get();
    $labels = $entries->pluck('date')->map(fn($date) => Carbon::parse($date)->format('Y-m-d'))->toArray();
    $data = $entries->pluck('count')->toArray();

    $chart = Chartjs::build()
        ->name('barChartTest')
        ->type('bar')
        ->size(['width' => 400, 'height' => 200])
        ->labels($labels)
        ->datasets([
            [
                "label" => "Entries",
                'backgroundColor' => ['rgba(255, 99, 132, 0.5)', 'rgba(255, 99, 132, 0.5)', 'rgba(255, 99, 132, 0.5)', 'rgba(255, 99, 132, 0.5)', 'rgba(255, 99, 132, 0.5)', 'rgba(255, 99, 132, 0.5)', 'rgba(255, 99, 132, 0.5)', 'rgba(255, 99, 132, 0.5)', 'rgba(255, 99, 132, 0.5)'],
                'data' => $data,
            ],
        ])
        ->options([
            "scales" => [
                "y" => [
                    "beginAtZero" => true
                ]
            ]
        ]);

    $downloadUrl = route('contests.download');
    $drawUrl = route('contests.draw');

    return view('kpi', compact('totalCount', 'lastEntry', 'correctEntries', 'chart', 'downloadUrl', 'drawUrl'));
})->name('kpi');

Route::get('/kpi8OwoL7cNuw', function () {
    $totalCount = Entry::where('contest_name', 'ramadan_2025')->count();
    $lastEntry = Entry::where('contest_name', 'ramadan_2025')->latest()->first();
    $correctEntries = Entry::where('contest_name', 'ramadan_2025')->where('answer', 2)->count();


    $entries = Entry::selectRaw('DATE(created_at) as date, COUNT(*) as count')
        ->groupBy('date')
        ->orderBy('date', 'ASC')
        ->where('contest_name', 'ramadan_2025')
        ->get();
    $labels = $entries->pluck('date')->map(fn($date) => Carbon::parse($date)->format('Y-m-d'))->toArray();
    $data = $entries->pluck('count')->toArray();

    $chart = Chartjs::build()
        ->name('barChartTest')
        ->type('bar')
        ->size(['width' => 400, 'height' => 200])
        ->labels($labels)
        ->datasets([
            [
                "label" => "Entries",
                'backgroundColor' => ['rgba(255, 99, 132, 0.5)', 'rgba(255, 99, 132, 0.5)', 'rgba(255, 99, 132, 0.5)', 'rgba(255, 99, 132, 0.5)', 'rgba(255, 99, 132, 0.5)', 'rgba(255, 99, 132, 0.5)', 'rgba(255, 99, 132, 0.5)', 'rgba(255, 99, 132, 0.5)', 'rgba(255, 99, 132, 0.5)'],
                'data' => $data,
            ],
        ])
        ->options([
            "scales" => [
                "y" => [
                    "beginAtZero" => true
                ]
            ]
        ]);

    $downloadUrl = route('contests.ramadan2025.download');
    $drawUrl = route('contests.ramadan2025.draw');

    return view('kpi', compact('totalCount', 'lastEntry', 'correctEntries', 'chart', 'downloadUrl', 'drawUrl'));
})->name('kpi');

Route::get('/dashboard', function () {
    $totalCount = Entry::count();
    $lastEntry = Entry::latest()->first();
    $correctEntries = Entry::where('answer', 2)->count();
    return view('dashboard', compact('totalCount', 'lastEntry', 'correctEntries'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('2025-founding-day-contest', [ContestController::class, 'index'])->name('contests.index');
Route::post('2025-founding-day-contest/enter', [ContestController::class, 'enter'])->name('contests.enter');

Route::get('2025-ramadan-contest', [RamadanContestController::class, 'index'])->name('contests.ramadan2025.index');
Route::post('2025-ramadan-contest/enter', [RamadanContestController::class, 'enter'])->name('contests.ramadan2025.enter');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('2025-founding-day-contest/draw', [ContestController::class, 'draw'])->name('contests.draw');
    Route::get('2025-founding-day-contest/download', [ContestController::class, 'download'])->name('contests.download');

    Route::get('2025-ramadan-contest/draw', [RamadanContestController::class, 'draw'])->name('contests.ramadan2025.draw');
    Route::get('2025-ramadan-contest/download', [RamadanContestController::class, 'download'])->name('contests.ramadan2025.download');
});

require __DIR__.'/auth.php';
