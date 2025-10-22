<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = "Fadil";
$request->password = "12345";

// ValidationUtil::validate($request);

ValidationUtil::validateReflection($request);

class RegisterUserRequest
{
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register = new RegisterUserRequest();
$register->name = "Superdills";
$register->address = "Indonesia";
$register->email = "Superdills7@gmail.com";

ValidationUtil::validateReflection($register);

ValidationUtil::validate($register);