<h1>Selection des personnages</h1>
<div class="container">
    @isset($combatPersonnage)
        {{ count($combatPersonnage) }} personnage selectionné
    @endisset
@foreach($personnages as $personnage)
<div class="bloc">
@isset($combatPersonnageId)
        <a class="" href="{{ route('send', ['id' => $personnage->id, 'combatPersonnageId' => $combatPersonnageId]) }}"><img class="img"  src="{{$personnage->imgUrl}}"></img></a>
@else
        <a class="" href="{{ route('send_p', ['id' => $personnage->id]) }}"><img class="img"  src="{{$personnage->imgUrl}}"></img></a>
@endisset
<a class="" href="">Stats</a>
</div>
@endforeach
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
