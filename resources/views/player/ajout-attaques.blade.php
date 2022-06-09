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
            {{ __('création d\'attaque') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
            <form method="post" action="{{ action('App\Http\Controllers\Attaque\AttaqueController@createUserForm') }}">
            @csrf
            <!-- NOM -->
                <div class="form-group">
                    <label>Nom de l'attaque</label>
                    <input type="text" class="form-control {{ $errors->has('nom') ? 'error' : '' }}" name="nom" id="nom">
                    <!-- Error -->
                    @if ($errors->has('nom'))
                        <div class="error">
                            {{ $errors->first('nom') }}
                        </div>
                    @endif
                </div>
                <!-- TYPE -->
                <div class="form-group">
                    <label>Type de l'attaque</label>
                    <select name="type" id="type" class="form-control">
                        @foreach($types as $type)
                            <option value="{{ $type->type_id }}">{{ $type->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <!-- DEGATS -->
                <div class="form-group">
                    <label>degats</label>
                    <input type="text" class="form-control {{ $errors->has('degats') ? 'error' : '' }}" name="degats" id="degats">
                    <!-- Error -->
                    @if ($errors->has('degats'))
                        <div class="error">
                            {{ $errors->first('degats') }}
                        </div>
                    @endif
                </div>
                <!-- PRECISION -->
                <div class="form-group">
                    <label>Précision</label>
                    <input type="text" class="form-control {{ $errors->has('precision') ? 'error' : '' }}" name="precision" id="precision">
                    <!-- Error -->
                    @if ($errors->has('precision'))
                        <div class="error">
                            {{ $errors->first('precision') }}
                        </div>
                    @endif
                </div>
                <!-- CRITIQUE -->
                <div class="form-group">
                    <label>Critique</label>
                    <input type="text" class="form-control {{ $errors->has('critique') ? 'error' : '' }}" name="critique" id="critique">
                    <!-- Error -->
                    @if ($errors->has('critique'))
                        <div class="error">
                            {{ $errors->first('critique') }}
                        </div>
                    @endif
                </div>
                <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
            </form>
        </div>
    </div>
    </div>
    </div>
</x-app-layout>
