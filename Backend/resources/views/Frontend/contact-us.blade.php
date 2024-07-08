@extends('layout.master')
@section('content')

<link rel="stylesheet" href="/css/contact-us.css">

<div class="contact-container">
  <div class="contact-title">
    Contact Us
  </div>
  <div class="contact-form">
    <form action="your-server-side-script.php" method="POST">
      <div class="contact-row">
        <div class="contact-column">
          <div class="contact-label">First Name</div>
          <input type="text" name="first_name" class="contact-input" placeholder="Enter your first_name" required>

          <div class="contact-label">Last Name</div>
          <input type="text" name="last_name" class="contact-input" placeholder="Enter your last_name" required>

          <div class="contact-label">Email</div>
          <input type="email" name="email" class="contact-input" placeholder="Enter your email" required>

          <div class="contact-label">Phone Number</div>
          <input type="tel" name="phone_number" class="contact-input" placeholder="Enter your phone_number" required>
        </div>
        <div class="contact-column">
          <div class="contact-label">Message:</div>
          <textarea name="message" class="contact-textarea" placeholder="your message" required></textarea>
        </div>
      </div>
      <div class="contact-submit">
        <button type="submit">Submit</button>
      </div>
    </form>
  </div>
</div>

@stop
