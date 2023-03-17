@extends('boards.layout')

@section('content')
    <h2 class="mt-4 mb-3">게시글 수정</h2>

    @if($errors->any())
        <div class="alert alert-warning" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('board.update', $board) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">제목</label>
            <input type="text" name="board_title" class="form-control" id="title" value="{{ $board->board_title }}">
        </div>
    </form>
@endsection
