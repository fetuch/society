@extends('layouts.app')

@section('content')
  <form method="POST" action="{{ route('register') }}"
        class="lg:w-1/2 lg:mx-auto bg-white py-12 px-16 rounded shadow"
  >
    @csrf

    <h1 class="text-2xl font-normal mb-10 text-center">Rejestracja</h1>

    <div class="field mb-6">
      <label class="label text-sm mb-2 block" for="email">Adres email</label>

      <div class="control">
        <input id="email"
               type="email"
               class="input bg-transparent border border-muted-light rounded p-2 text-xs w-full{{ $errors->has('email') ? ' border-red-600' : '' }}"
               name="email"
               value="{{ old('email') }}"
               required>
      </div>
    </div>

    <div class="field mb-6">
      <label class="label text-sm mb-2 block" for="password">Hasło</label>

      <div class="control">
        <input id="password"
               type="password"
               class="input bg-transparent border border-muted-light rounded p-2 text-xs w-full{{ $errors->has('password') ? ' border-red-600' : '' }}"
               name="password"
               required>
      </div>
    </div>

    <div class="field mb-6">
      <label class="label text-sm mb-2 block" for="password-confirmation">Powtórz hasło</label>

      <div class="control">
        <input id="password-confirmation"
               type="password"
               class="input bg-transparent border border-muted-light rounded p-2 text-xs w-full"
               name="password_confirmation"
               required>
      </div>
    </div>

    <div class="field mb-3">
      <div class="control">
        <button type="submit" class="button is-link mr-2 focus:outline-none">Zarejestruj</button>
      </div>
    </div>

    @include('errors')
  </form>
@endsection
