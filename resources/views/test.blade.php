@include('headers')


<h1>Test Blade</h1>

@php
    $name = "Faysal";
    $fruits = array('Mango','Apple','Banana','Pineapple');
@endphp

<h2>{{$name}}</h2>

<h2>Fruits</h2>

@foreach($fruits as $fruit)
    <li>{{$fruit}}</li>
@endforeach

<?php 

    for ($i=0; $i < 10; $i++) { 
        echo "<h1>".$i."</h1>";
    }

?>

@if(count($fruits) == 1)
    One Fruit
@elseif(count($fruits)>1)
    More than One fruit
@else
    No Fruit
@endif