@extends('layout.contactus')

@section('content')
    <div class="container">
        <h2>Create Contact Message</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('contact_us.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="f_name">First Name:</label>
                <input type="text" name="f_name" class="form-control" id="f_name" value="{{ old('f_name') }}" required>
            </div>
            <div class="form-group">
                <label for="l_name">Last Name:</label>
                <input type="text" name="l_name" class="form-control" id="l_name" value="{{ old('last_name') }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="text" name="phone" class="form-control" id="phone" value="{{ old('phone_number') }}" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea name="message" class="form-control" id="message" required>{{ old('message') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
