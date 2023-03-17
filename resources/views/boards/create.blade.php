@extends('boards.layout')

@section('content')
    <h2 class="mt-4 mb-3">게시글 작성</h2>

    <script>
        @if($errors->any())
            @foreach($errors->all() as $error)
                alert('{{ $error }}');
            @endforeach
        @endif
    </script>

    <form action="{{ route('board.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">제목</label>
            <input type="text" name="board_title" class="form-control" id="title">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">내용</label>
            <textarea rows="10" cols="40" style="resize: none;" name="board_content" class="form-control" id="content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">저장</button>
    </form>
@endsection
