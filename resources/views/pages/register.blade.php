@extends('layouts.index')

@section('css')
<style scoped>
 a {
  font-size: 12px;
  text-decoration: none;
 }

 .container .section-1 h1 {
  font-weight: 400;
  font-size: 20px;
 }

 .container .section-2 h1 {
  font-weight: 400;
  font-size: 12px;
 }

 .facebook-register h1 {
  color: #385185;
  font-weight: 550 !important;
  font-size: 14px !important;
  display: flex;
  align-items: center;
  column-gap: 5px;
 }

 .container {
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;
  text-align: center;
  margin: 20px 0px;
 }

 .container .section-1,
 .section-2 {
  display: flex;
  row-gap: 20px;
  width: 350px;
  margin: 5px 0px;
  padding: 5px 0px;
  background-color: rgba(255, 255, 255, 80%);
 }

 .section-1 {
  /* background-color: rgba(255, 255, 255, 80%); */
  /* margin: 5px 450px; */
  flex-direction: column;
 }

 .section-1 .title .text {
  margin-top: 20px;
  padding: 0px 50px;
 }

 .section-1 .register-section {
  display: flex;
  flex-direction: column;
 }

 .register-section .form-section {
  margin: 0px 20px;
  line-height: 30px;
 }

 .register-section .form-section input {
  outline: none;
  width: 300px;
  margin: 5px 0px;
  height: 35px;
  border-radius: 5px;
  padding: 10px 5px;
  border: 1px solid rgba(0, 0, 0, 20%);
 }

 .register-section .form-section button {
  width: 300px;
  height: 35px;
  border: none;
  margin: 5px 0px;
  background-color: rgb(0, 149, 246);
  border-radius: 8px;
  color: white;
 }

 .register-section .or-section {
  display: flex;
  text-align: center;
  justify-content: center;
  align-items: center;
  margin: 0px 10px;
  line-height: 35px;
  color: rgba(0, 0, 0, 40%);
 }

 .register-section .or-section hr {
  width: 120px;
  margin: 0px 20px;
  border: 0.1px solid rgba(0, 0, 0, 5%);
  background-color: rgba(0, 0, 0, 20%);
 }

 .register-section .form-section i {
  position: absolute;
  right: 475px;
  /* top: 252px; */
  opacity: 50%;
  cursor: pointer;
  transition: 0.3s;
  margin-top: 15px;
  /* margin-left: 10px; */
 }

 .register-section .form-section i:hover {
  opacity: 100%;
 }

 .facebook-register {
  line-height: 40px;
  display: flex;
  flex-direction: column;
  align-items: center;
 }

 .facebook-register img {
  width: 25px;
  height: auto;
  /* position: absolute;
  top: 252px;
  left: 505px; */
 }

 .section-2 {
  /* background-color: rgba(255, 255, 255, 80%); */
  /* margin: 5px 0px; */
  flex-direction: row;
  justify-content: center;
  align-items: center;
  padding: 20px 0px;
  column-gap: 5px;
 }
</style>
@endsection

@section('main-content')
<div class="container">
 <div class="section-1">
  <div class="title">
   <div class="instagram">
    <h1>Instagram</h1>
   </div>
   <div class="text">
    <p>Sign up to see photos and videos from your friends</p>
   </div>
  </div>

  <div class="facebook-register">
   <a href="#">
    <h1>
     <img src="{{ asset('images/icons/facebook.png') }}" alt="Facebook Icon">
     Log in with Facebook
    </h1>
   </a>
  </div>

  <div class="register-section">
   <div class="form-section">
    <form action="{{ route('register.post') }}" method="post">
     @csrf
     @error('email')
     {{ $message }}
     @enderror
     <input type="email" placeholder="Email" name="email">
     @error('password')
     {{ $message }}
     @enderror
     <input type="password" placeholder="Password" name="password">
     <i class="fa-solid fa-eye-slash"></i>
     @error('name')
     {{ $message }}
     @enderror
     <input type="text" placeholder="Fullname" name="name">
     @error('username')
     {{ $message }}
     @enderror
     <input type="text" placeholder="Username" name="username">
     <br>
     <button type="submit">Sign up</button>
    </form>
   </div>
   <div class="or-section">
    <div class="line-1">
     <hr>
    </div>
    <div class="or">Or</div>
    <div class="line-2">
     <hr>
    </div>
   </div>
  </div>
 </div>


 <div class="section-2">
  <h1>Have an account?</h1>
  <a href="/">Log in</a>
 </div>
</div>
@endsection