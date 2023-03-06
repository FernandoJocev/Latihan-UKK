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

 .facebook-login h1 {
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

 .section-1 .login-section {
  display: flex;
  flex-direction: column;
 }

 .login-section .form-section {
  margin: 0px 20px;
  line-height: 30px;
 }

 .login-section .form-section input {
  outline: none;
  width: 300px;
  margin: 5px 0px;
  height: 35px;
  border-radius: 5px;
  padding: 10px 5px;
  border: 1px solid rgba(0, 0, 0, 20%);
 }

 .login-section .form-section button {
  width: 300px;
  height: 35px;
  border: none;
  margin: 5px 0px;
  background-color: rgb(0, 149, 246);
  border-radius: 8px;
  color: white;
 }

 .login-section .or-section {
  display: flex;
  text-align: center;
  justify-content: center;
  align-items: center;
  margin: 0px 10px;
  line-height: 35px;
  color: rgba(0, 0, 0, 40%);
 }

 .login-section .or-section hr {
  width: 120px;
  margin: 0px 20px;
  border: 0.1px solid rgba(0, 0, 0, 5%);
  background-color: rgba(0, 0, 0, 20%);
 }

 .login-section .form-section i {
  position: absolute;
  right: 475px;
  opacity: 50%;
  cursor: pointer;
  transition: 0.3s;
  margin-top: 15px;
  /* margin-left: 10px; */
 }

 .login-section .form-section i:hover {
  opacity: 100%;
 }

 .facebook-login {
  line-height: 40px;
  display: flex;
  flex-direction: column;
  align-items: center;
 }

 .facebook-login img {
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
   <h1>Instagram</h1>
  </div>

  <div class="login-section">
   <div class="form-section">
    <form action="{{ route('login.post') }}" method="post">
     @csrf
     @error('email')
     {{ $message }}
     @enderror
     <input type="text" placeholder="Email" name="email">
     @csrf
     @error('password')
     {{ $message }}
     @enderror
     <input type="password" placeholder="Password" name="password">
     <i class="fa-solid fa-eye-slash"></i>
     <br>
     <button type="submit">Log in</button>
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

  <div class="facebook-login forgot-password">
   <a href="#">
    <h1>
     <img src="{{ asset('images/icons/facebook.png') }}" alt="Facebook Icon">
     Log in with Facebook
    </h1>
   </a>
   <a href="#">Forgot password?</a>
  </div>
 </div>

 <div class="section-2">
  <h1>Don't have an account?</h1>
  <a href="/register">Sign up</a>
 </div>
</div>
@endsection