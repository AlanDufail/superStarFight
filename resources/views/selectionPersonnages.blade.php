<h1>Selection des personnages</h1>
<div class="container">
@foreach($personnages as $personnages)
<div class="bloc">
    <a class="" href="{{ route('send', ['id' => $personnages->id]) }}"><img class="img"  src="{{$personnages->imgUrl}}"></img></a>
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
