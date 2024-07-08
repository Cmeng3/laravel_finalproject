@extends('layout.order')

@section('content')
    <div class="container">
        <h2>News & Article</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    < <th scope="col">ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Detail</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $item->news_id }}</td>
                        <td><img src="{{asset($item->img)}}" alt="" width="75" height="75"></td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->details }}</td>
                        <td>
                            <a href="/news/{{ $order->id }}/edit" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
