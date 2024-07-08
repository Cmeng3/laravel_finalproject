@extends('layout.animalinformation')

@section('content')
    <div class="container">
        <h2>Create Animal information</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('animalinformation.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="animal_name">Animal Name:</label>
                <input type="text" name="animal_name" class="form-control" id="animal_name" required>
            </div>
            <div class="form-group">
                <label for="img">Image:</label>
                <input type="file" name="img" class="form-control" id="img" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" name="description" class="form-control" id="description" required>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" name="price" class="form-control" id="price" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
