<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Models\Matchs;



Route::get('/', function () {
    $matches = Matchs::with('details')
        ->orderByDesc('scrape_timestamp')
        ->get();

    return Inertia::render('Matches', [
        'matches' => $matches
    ]);
});
require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
