@extends('layout.petmatching')

@section('content')
    <div class="container">
        <h2>Edit Pet Matching</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('petmatching.update', $pet->animal1_id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="human_trait">Human Trait:</label>
                <input type="text" name="human_trait" class="form-control" id="human_trait" value="{{ $pet->human_trait }}" required>
            </div>
            <div class="form-group">
                <label for="Animal_traits">Animal Trait:</label>
                <input type="text" name="Animal_traits" class="form-control" id="Animal_traits" value="{{ $pet->Animal_traits }}" required>
            </div>
            <div class="form-group">
                <label for="meet_ivy">Meet Ivy:</label>
                <input type="text" name="meet_ivy" class="form-control" id="meet_ivy" value="{{ $pet->meet_ivy }}" required>
            </div>
            <div class="form-group">
                <label for="img">Image:</label>
                <input type="file" name="img" class="form-control" id="img" value="{{ $pet->img }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
