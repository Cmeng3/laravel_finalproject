@extends('layout.user')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Users</h1>
                <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Create User</a>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->telephone }}</td>
                                <td>
                                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">Show</a>
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('user.destroy', $user) }}" method="POST" style="display:inline;">
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
        </div>
    </div>
@endsection
