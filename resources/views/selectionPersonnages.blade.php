<h1>Selection des personnages</h1>
<div class="container">

@foreach($personnages as $personnage)
<div class="bloc">
    @isset($combatPersonnageId)
            <h2>{{$personnage->nom}}</h2><a class="" href="{{ route('send', ['id' => $personnage->id, 'combatPersonnageId' => $combatPersonnageId]) }}"><img class="img"  src="{{$personnage->imgUrl}}"></img></a>
    @else
            <h2>{{$personnage->nom}} - #{{ $personnage->id }}</h2><a class="" href="{{ route('send_p', ['id' => $personnage->id]) }}"><img class="img"  src="{{$personnage->imgUrl}}"></img></a>
    @endisset
    <a class="" href="">Stats</a>
</div>
@endforeach
    @isset($combatPersonnageId)
        <a class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden"  href="{{ route('bataille', ['id' => $personnage->id, 'combatPersonnageId' => $combatPersonnageId]) }}">
            <img class="w-32 mx-auto lg:mr-0 slide-in-bottom" src="{{ URL('assets/images/playbtn.png')}}"></a>
    @endisset
</div>

<style>
.container {
    display:flex;
}
.bloc {
    display: flex;
    flex-direction:column;
    width: 200px;
}
.img {
    margin: 10px;
    width: 100px;
    }
</style>
