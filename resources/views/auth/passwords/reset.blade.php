@extends('layouts.app')

@section('content')
  <form method="POST" action="{{ route('password.update') }}"
        class="lg:w-1/2 lg:mx-auto bg-white py-12 px-16 rounded shadow"
  >
    @csrf

    <h1 class="text-2xl font-normal mb-10 text-center">Reset hasła</h1>

    <input type="hidden" name="token" value="{{ $token }}">

    <div class="field mb-6">
      <label class="label text-sm mb-2 block" for="email">{{ __('E-Mail Address') }}</label>

      <div class="control">
        <input
          id="email"
          type="email"
          class="input bg-transparent border border-muted-light rounded p-2 text-xs w-full {{ $errors->has('email') ? ' is-invalid' : '' }}"
          name="email"
          value="{{ $email ?? old('email') }}"
          required
        >
      </div>
    </div>

    <div class="field mb-6">
      <label class="label text-sm mb-2 block" for="password">{{ __('Password') }}</label>

      <div class="control">
        <input
          id="password"
          type="password"
          class="input bg-transparent border border-muted-light rounded p-2 text-xs w-full {{ $errors->has('password') ? ' is-invalid' : '' }}"
          name="password"
          required
        >
      </div>
    </div>

    <div class="field mb-6">
      <label class="label text-sm mb-2 block" for="password-confirm">{{ __('Confirm Password') }}</label>

      <div class="control">
        <input
          id="password-confirm"
          type="password"
          class="input bg-transparent border border-muted-light rounded p-2 text-xs w-full"
          name="password_confirmation"
          required
        >
      </div>
    </div>

    <div class="field mb-6">
      <div class="col-md-8 offset-md-4">
        <button type="submit" class="button focus:outline-none">
          {{ __('Reset Password') }}
        </button>
      </div>
    </div>

    @include('errors')
  </form>
@endsection
