<?php

namespace App\Http\Controllers;

use App\Models\AlphaUsers;
use App\Models\BetaUsers;
use Illuminate\Support\Benchmark;

class AlphaUserController extends Controller
{
    public function __invoke()
    {
        Benchmark::dd([
            fn() => AlphaUsers::with('roles')->withCount('posts', 'comments')->get(),
            fn() => BetaUsers::with('roles')->withCount('posts', 'comments')->get(),
        ], 5);

        return 'foo';
        return response()->json($users);
    }
}
