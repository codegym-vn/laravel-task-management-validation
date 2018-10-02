@extends('home')
@section('title', 'Danh sách công viêc')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Danh sách công viêc</h2>
        </div>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên công việc</th>
                    <th scope="col">Nội dung</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Ngày hết hạn</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tasks as $key => $task)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->content }}</td>
                    <td>
                        @if($task->image)
                        <img src="image.png" alt="" style="width: 200px; height: 200px">
                        @else
                            {{'Chưa có ảnh'}}
                        @endif
                    </td>
                    <td>{{ $task->due_date }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
