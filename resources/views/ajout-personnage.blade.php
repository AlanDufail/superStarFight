<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Validation in Laravel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('création de personnage') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
            <form method="post" action="{{ action('App\Http\Controllers\Personnage\PersonnageController@createUserForm') }}">
            @csrf
            <!-- PRENOM -->
                <div class="form-group">
                    <label>Prénom</label>
                    <input type="text" class="form-control {{ $errors->has('prenom') ? 'error' : '' }}" name="prenom" id="prenom">
                    <!-- Error -->
                    @if ($errors->has('prenom'))
                        <div class="error">
                            {{ $errors->first('prenom') }}
                        </div>
                    @endif
                </div>
                <!-- NOM -->
                <div class="form-group">
                    <label>Nom</label>
                    <input type="text" class="form-control {{ $errors->has('nom') ? 'error' : '' }}" name="nom" id="nom">
                    <!-- Error -->
                    @if ($errors->has('nom'))
                        <div class="error">
                            {{ $errors->first('nom') }}
                        </div>
                    @endif
                </div>
                <!-- SEXE -->
                <div class="form-group">
                    <label>Sexe</label>
                    <input type="text" class="form-control {{ $errors->has('sexe') ? 'error' : '' }}" name="sexe" id="sexe">
                    <!-- Error -->
                    @if ($errors->has('sexe'))
                        <div class="error">
                            {{ $errors->first('sexe') }}
                        </div>
                    @endif
                </div>
                <!-- STYPE -->
                <div class="form-group">
                    <label>Type</label>
                    <select name="type_id" id="type_id" class="form-control">
                        @foreach($types as $type)
                            <option value="{{ $type->id }}">{{ $type->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <!-- URL DE L'IMG -->
                <div class="form-group">
                    <label>URL de l'image</label>
                    <input type="text" class="form-control {{ $errors->has('imgUrl') ? 'error' : '' }}" name="imgUrl" id="imgUrl">
                    <!-- Error -->
                    @if ($errors->has('imgUrl'))
                        <div class="error">
                            {{ $errors->first('imgUrl') }}
                        </div>
                    @endif
                </div>
                <!-- VIE -->
                <div class="form-group">
                    <label>vie</label>
                    <input type="text" class="form-control {{ $errors->has('vie') ? 'error' : '' }}" name="vie" id="vie">
                    <!-- Error -->
                    @if ($errors->has('vie'))
                        <div class="error">
                            {{ $errors->first('vie') }}
                        </div>
                    @endif
                </div>
                <!-- ATTAQUE -->
                <div class="form-group">
                    <label>attaque</label>
                    <input type="text" class="form-control {{ $errors->has('attaque') ? 'error' : '' }}" name="attaque" id="attaque">
                    <!-- Error -->
                    @if ($errors->has('attaque'))
                        <div class="error">
                            {{ $errors->first('attaque') }}
                        </div>
                    @endif
                </div>
                <!-- DEFENSE -->
                <div class="form-group">
                    <label>defense</label>
                    <input type="text" class="form-control {{ $errors->has('defense') ? 'error' : '' }}" name="defense" id="defense">
                    <!-- Error -->
                    @if ($errors->has('defense'))
                        <div class="error">
                            {{ $errors->first('defense') }}
                        </div>
                    @endif
                </div>
                <!-- VITESSE -->
                <div class="form-group">
                    <label>vitesse</label>
                    <input type="text" class="form-control {{ $errors->has('vitesse') ? 'error' : '' }}" name="vitesse" id="vitesse">
                    <!-- Error -->
                    @if ($errors->has('vitesse'))
                        <div class="error">
                            {{ $errors->first('vitesse') }}
                        </div>
                    @endif
                </div>
                <!-- ATTAQUE NR 1 -->
                <div class="form-group">
                    <label>attaque_nbr1</label>
                    <select name="attaque_nbr1" id="attaque_nbr1" class="form-control">
                        @foreach($attaques as $attaque)
                            <option value="{{ $attaque->id }}">{{ $attaque->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <!-- ATTAQUE NR 2 -->
                <div class="form-group">
                    <label>attaque_nbr4</label>
                    <select name="attaque_nbr2" id="attaque_nbr2" class="form-control">
                        @foreach($attaques as $attaque)
                            <option value="{{ $attaque->id }}">{{ $attaque->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <!-- ATTAQUE NR 3 -->
                <div class="form-group">
                    <label>attaque_nbr4</label>
                    <select name="attaque_nbr3" id="attaque_nbr3" class="form-control">
                        @foreach($attaques as $attaque)
                            <option value="{{ $attaque->id }}">{{ $attaque->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <!-- ATTAQUE NR 4 -->
                <div class="form-group">
                    <label>attaque_nbr4</label>
                    <select name="attaque_nbr4" id="attaque_nbr4" class="form-control">
                        @foreach($attaques as $attaque)
                            <option value="{{ $attaque->id }}">{{ $attaque->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
            </form>
        </div>
    </div>
    </div>
    </div>
</x-app-layout>
