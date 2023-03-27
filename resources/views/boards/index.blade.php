@extends('boards.layout')

@section('content')
    <h2 class="mt-4 mb-3">라라벨 게시판</h2>

    <a href="{{ route('board.create') }}">
        <button type="button" class="btn btn-dark" style="float: right;">글 작성</button>
    </a>

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
        <tbody class="table-group-divider">
        {{-- 게시글의 번호를 내림차순으로 표시해주기 위해 작성 --}}
        @php
            $no = $boards->total() - (($boards->currentPage() - 1) * $boards->perPage());
        @endphp
        {{-- 반복문 --}}
        @foreach($boards as $key => $board)
            <tr>
                <th scope="row" class="align-middle">{{ $no-- }}</th>
                <td class="align-middle">
                    <a href="{{ route('board.show', ['board' => $board->board_id]) }}">{{ $board->board_title }}</a>
                </td>
                <td class="align-middle">{{ $board->created_at }}</td>
                <td class="align-middle">
                    <a href="{{ route('board.edit', ['board' => $board->board_id]) }}">
                        <button class="btn btn-dark">수정</button>
                    </a>
                    <a href="{{ route('board.delete', ['board' => $board->board_id]) }}">
                        <button class="btn btn-danger">삭제</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{-- 페이지네이션 --}}
    {{ $boards->withQueryString()->links() }}
@endsection
