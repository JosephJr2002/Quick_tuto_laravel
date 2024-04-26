@extends('layouts.app')
@section('content')
    <form action="" method="post">
        @csrf
        <div>
            @include("components.form")

            <div class="mt-3 text-center pt-3">
                <input class="btn btn-primary" type="submit" value="Enregistrer">
                <input class="btn btn-danger" type="reset" value="Annuler">
            </div>
        </div>
        </form>
@endsection