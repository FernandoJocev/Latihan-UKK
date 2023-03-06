@extends('layouts.index')

@section('css')
<style scoped>
 i {
  cursor: pointer;
  font-size: 25px !important;
 }

 a {
  text-decoration: none;
  font-weight: 500;
  margin-left: 50px;
  font-size: 12px;
 }

 .sidebar a {
  margin: 0px 0px !important;
  color: black !important;
 }

 .sidebar .fa-instagram,
 img {
  margin-bottom: 30px;
 }

 .container {
  display: flex;
  justify-content: space-between;
 }

 .container .sidebar {
  display: flex;
  flex-direction: column;
  align-items: center;
  row-gap: 35px;
  background-color: rgba(255, 255, 255, 50%);
  width: 90px;
  height: 100vh;
  /* margin: 50px 0px; */
  border-right: 1px solid rgba(0, 0, 0, 40%);
  padding: 30px 0px;
 }

 .accounts {
  display: flex;
  flex-direction: column;
  /* align-items: center; */
  margin: 40px 20px;
  justify-content: flex-start;
  row-gap: 20px;
 }

 .switch-account,
 .suggestion-accounts {
  display: flex;
  align-items: center;
  justify-content: space-between;
 }

 .profile {
  align-items: center;
  display: flex;
 }
</style>
@endsection

@section('main-content')
<div class="container">
 <div class="sidebar">
  <i class="fa-brands fa-instagram"></i>
  <i class="fa-solid fa-house"></i>
  <i class="fa-solid fa-magnifying-glass"></i>
  <i class="fa-solid fa-compass"></i>
  <i class="fa-solid fa-play"></i>
  <i class="fa-brands fa-facebook-messenger"></i>
  <i class="fa-solid fa-heart"></i>
  <a href="/post">
   <i class="fa-solid fa-square-plus">
   </i>
  </a>
  <img src="" alt="">
  <i class="fa-solid fa-bars"></i>
 </div>

 <div class="content">
  <h1>Home</h1>
  <a href="{{ route('logout') }}">Logout</a>
 </div>

 <div class="accounts suggestions">
  <div class="switch-account">
   <div class="profile">
    <img src="" alt="">
    <p>fernandojocevine</p>
   </div>
   <div class="switch">
    <a href="#">Switch</a>
   </div>
  </div>
  <p>Suggestions for you</p>
  <div class="suggestion-accounts">
   <div class="profile">
    <img src="" alt="">
    <p>testing</p>
   </div>
   <div class="follow">
    <a href="#">Follow</a>
   </div>
  </div>
 </div>
</div>
@endsection