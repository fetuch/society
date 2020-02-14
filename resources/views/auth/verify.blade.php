@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <h1 class="card-header">
                Potwierdź swój adres email
            </h1>

            <div>
                Zanim bedziesz mógł/mogła kontynuować, potwierdź swój adres email.

                Jeśli nie otrzymałeś/otrzymałaś wiadomości na swoją skrzynkę, <a href="javascript:;"
                                                                                 onclick="javascript: document.querySelector('#resend-form').submit()">kliknij
                    tu, by otrzymać kolejną wiadomość.</a>.

                <form id="resend-form" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                </form>
            </div>

            @if (session('resent'))
                <div class="mt-4" role="alert">
                    Nowy link weryfikujący został wysłany na Twoją skrzynkę email.
                </div>
            @endif
        </div>
    </div>
@endsection
