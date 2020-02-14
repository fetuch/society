@extends('layouts.app')

@section('content')
  <form method="POST" action="{{ route('password.email') }}"
        class="lg:w-1/2 lg:mx-auto bg-white py-12 px-16 rounded shadow"
  >
    @csrf

    <h1 class="text-2xl font-normal mb-10 text-center">Reset hasła</h1>

    <div class="field mb-6">
      <label class="label text-sm mb-2 block" for="email">Adres email</label>

      <div class="control">
        <input
          id="email"
          type="email"
          class="input bg-transparent border border-muted-light rounded p-2 text-xs w-full{{ $errors->has('email') ? ' is-invalid' : '' }}"
          name="email"
          value="{{ old('email') }}"
          required
        >
      </div>
    </div>

    <div class="field mb-6">
      <div class="col-md-8 offset-md-4">
        <button type="submit" class="button focus:outline-none">
          Wyślij link resetujący hasło
        </button>
      </div>
    </div>

    @if (session('status'))
      <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>
    @endif

    @include('errors')
  </form>
@endsection
