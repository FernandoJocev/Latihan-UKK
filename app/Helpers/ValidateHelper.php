<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Validator;

class ValidateHelper
{
 public static function LoginValidator($data)
 {
  $rules = $data->validate([
   'email' => ['required', 'email', 'exists:users,email'],
   'password' => ['required', 'min:8']
  ]);

  return $rules;
 }

 public static function RegisterValidator($data)
 {
  $rules = $data->validate([
   'email' => ['required', 'email', 'unique:users,email'],
   'name' => ['required'],
   'username' => ['required', 'unique:users,username'],
   'password' => ['min:8'],
  ]);

  return $rules;
 }
}
