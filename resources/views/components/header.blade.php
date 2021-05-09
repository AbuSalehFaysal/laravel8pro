<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->
    <h1>THIS IS HEADER COMPONENT!</h1>
    <h3>Hello {{$name}}</h3>
    <ul>
        @foreach($fruits as $fruit)
            <li>{{$fruit}}</li>
        @endforeach
    </ul>
</div>