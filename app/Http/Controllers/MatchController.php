<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matchs;

class MatchController extends Controller
{
    public function index()
    {
        return Matchs::with('details')->orderByDesc('scrape_timestamp')->get();
    }
}
