@extends('layouts.app')

@section('title', 'Ranjit')
@section('content')

    <h2>Collegue Details</h2>

    <p><strong>Name:</strong> {{ $collegue->name }}</p>
    <p><strong>Email:</strong> {{ $collegue->email }}</p>
    <p><strong>Phone:</strong> {{ $collegue->phone }}</p>
    <p><strong>Age:</strong> {{ $collegue->age }}</p>
    <p><strong>Gender:</strong> {{ $collegue->gender }}</p>
    <p><strong>Address:</strong> {{ $collegue->address }}</p>
    <p><strong>Department:</strong> {{ $collegue->department }}</p>
    <p><strong>Position:</strong> {{ $collegue->position }}</p>
    <p><strong>Education:</strong> {{ $collegue->education }}</p>
    <p><strong>Bio:</strong> {{ $collegue->bio }}</p>

@endsection


{{-- 
    1. Php artisan make:model Collegue -m
    2. migration file hunca tyo file ma gara ->
        2.1 name, email, phone
        2.2 basic infos like, age, gender, upto 5more fileds
        2.3 php artisan migrate

    3. Jun dataset bannako chau tyo data set ko data lai, collegues vanne table ma gara entry gara upto 10datas.
    4. from College model get the value of collegue whose phone number is 9844622904
    5. return the detail in view file and display it.

    eg:     $ranju = Ranjit::where('phone', 9844622904)->first();
--}}
