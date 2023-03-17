<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    private $board;

    public function __construct(Board $board) {
        $this->board = $board;
    }

    public function index() {
        $boards = $this->board->latest()->paginate(10);

        return view('boards.index', compact('boards'));
    }

    public function store(Request $request) {
        $request = $request->validate([
            'board_title' => 'required',
            'board_content' => 'required'
        ]);
        $this->board->create($request);

        return redirect()->route('board.index');
    }

    public function show(Board $board) {
        return view('boards.detail', compact('board'));
    }

    public function edit(Board $board) {
        return view('boards.edit', compact('board'));
    }

    public function update(Board $board, Request $request) {
        $request = $request->validate([
            'board_title' => 'required',
            'board_content' => 'required'
        ]);
        $board->update($request);
        return redirect()->route('board.index', $board);
    }

    public function delete(Board $board) {

    }
}
