@extends('layout.petmatching')

@section('content')
    <div class="container">
        <h2>Pet Matching</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Human Trait</th>
                    <th>Animal Traits</th>
                    <th>Meet Ivy</th>
                    <th>Image</th>
                    <th>Actions</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pets as $items)
                    <tr>
                        <td>{{ $item->animal1_id }}</td>
                        <td>{{ $item->human_trait }}</td>
                        <td>{{ $item->Animal_traits }}</td>
                        <td>{{ $item->meet_ivy }}</td>
                        <td><img src="{{ asset($item->img) }}" alt="" width="75" height="75"></td>
                        <td>
                            <a href="/news/{{ $order->id }}/edit" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
