@extends('layout.master')
@section('content')

<link rel="stylesheet" href="/css/contact-us.css">

<div class="contact-container">
  <div class="contact-title">
    Contact Us
  </div>
  <div class="contact-form">
    <form action="/contact_us/store" method="post">
      @csrf
      <div class="contact-row">
        <div class="contact-column">
          <div class="contact-label">First Name</div>
          <input type="text" name="f_name" id="f_name" class="contact-input" placeholder="Enter your first name" required>
          
          <div class="contact-label">Last Name</div>
          <input type="text" name="l_name" id="l_name" class="contact-input" placeholder="Enter your last name" required>
          
          <div class="contact-label">Email</div>
          <input type="email" name="email" id="email" class="contact-input" placeholder="Enter your email" required>
          
          <div class="contact-label">Phone Number</div>
          <input type="tel" name="phone" id="phone" class="contact-input" placeholder="Enter your phone number" required>
        </div>
        <div class="contact-column">
          <div class="contact-label">Message</div>
          <textarea name="message" id="message" class="contact-textarea" placeholder="Your message" required></textarea>
        </div>
      </div>
      <div class="contact-submit">
        <button type="submit">Submit</button>
      </div>
    </form>
  </div>
</div>

@stop
