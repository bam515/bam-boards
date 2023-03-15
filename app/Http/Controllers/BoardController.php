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
}
