@extends('layout.contactus')

@section('content')
<div class="container">
    <h2>Edit Contact Message</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contact_us.update', $contact->Contact_us_ID) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="f_name">First Name:</label>
            <input type="text" name="f_name" class="form-control" id="f_name" value="{{ $contact->f_name }}" required>
        </div>
        <div class="form-group">
            <label for="l_name">Last Name:</label>
            <input type="text" name="l_name" class="form-control" id="l_name" value="{{ $contact->l_name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ $contact->email }}" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="text" name="phone" class="form-control" id="phone" value="{{ $contact->phone }}" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea name="message" class="form-control" id="message" required>{{ $contact->message }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
