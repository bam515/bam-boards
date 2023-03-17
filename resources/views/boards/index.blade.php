@extends('boards.layout')

@section('content')
    <h2 class="mt-4 mb-3">라라벨 게시판</h2>

    <a href=""><button type="button" class="btn btn-dark" style="float: right;">글 작성</button></a>

    <table class="table table-striped table-hover">
        <colgroup>
            <col style="width: 10%;">
            <col style="width: 50%;">
            <col style="width: 20%;">
            <col style="width: 20%;">
        </colgroup>
        <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">제목</th>
            <th scope="col">작성일</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @php
            $no = $boards->total() - (($boards->currentPage() - 1) * $boards->perPage());
        @endphp
        @foreach($boards as $key => $board)
            <tr>
                <td>{{ $no-- }}</td>
                <td>{{ $board->board_title }}</td>
                <td>{{ $board->created_at }}</td>
                <td>
                    <button type="button" onclick="location.href='{{ route('board.edit', $board) }}'">수정</button>
                    <button type="button" onclick="location.href='{{ route('board.delete', $board) }}'">삭제</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
