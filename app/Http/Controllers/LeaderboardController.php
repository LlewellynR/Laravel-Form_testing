<?php
namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\saved_games_table;
use Illuminate\Validation\ValidationException;

class LeaderboardController extends Controller
{
    public function index()
    {
        $scores = saved_games_table::with('user')
            ->orderByDesc('grid_score')->get();

        return view('Leaderboard', compact('scores'));
    }

    public function save(Request $request)
    {
        try {
            $validated = $request->validate([
                'score' => 'required|integer|min:0',
            ]);

            saved_games_table::create([
                'user_id' => auth()->id(),
                'grid_score' => $validated['score'],
            ]);

            return redirect()->route('dashboard');

        } catch (Exception $e) {
            throw ValidationException::withMessages([
                'score' => 'Error inserting data: ' . $e->getMessage(),
            ]);
        }
    }

}
