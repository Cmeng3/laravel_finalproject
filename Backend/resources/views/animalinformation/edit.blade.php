@extends('layout.animalinformation')

@section('content')
    <div class="container">
        <h2>Edit Animal information</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('animalinformation.update', $animalinfo->animal_id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="animal_name">Animal Name:</label>
                <input type="text" name="animal_name" class="form-control" id="animal_name" value="{{ $animalinfo->animal_name }}" required>
            </div>
            <div class="form-group">
                <label for="img">Image:</label>
                <input type="file" name="img" class="form-control" id="img" value="{{ $animalinfo->img }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" name="description" class="form-control" id="description" value="{{ $animalinfo->description }}" required>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" name="price" class="form-control" id="price" value="{{ $animalinfo->price }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
