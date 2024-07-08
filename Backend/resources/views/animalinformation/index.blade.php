@extends('layout.animalinformation')

@section('content')
    <div class="container">
        <h2>Dog&Cat Information</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Animal Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($animalinfo as $ani)
                            <tr>
                                <td>{{ $ani->animal_id }}</td>
                                <td>{{ $ani->animal_name }}</td>
                                <td><img src="{{ asset($ani->img) }}" alt="" width="75" height="75"></td>
                                <td>{{ $ani->description }}</td>
                                <td>{{ $ani->price }}</td>
                                <td><a href="/contact_us/{{ $ani->animal_id }}/edit/"
                                        class="btn btn-success">Edit</a></td>
                                <td>
                                    <form action="{{ route('contact_us.destroy', $ani->animal_id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
            </tbody>
        </table>
    </div>
@endsection
