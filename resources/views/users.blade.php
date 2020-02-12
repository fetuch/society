@extends('layouts.app')

@section('head')
  <script src="{{ asset('vendor/js/jquery-3.3.1.js') }}"></script>

  <script src="{{ asset('vendor/js/jquery.dataTables.min.js') }}"></script>

  <script src="{{ asset('vendor/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('vendor/js/jszip.min.js') }}"></script>
  <script src="{{ asset('vendor/js/buttons.html5.min.js') }}"></script>

  <link rel="stylesheet" href="{{ asset('vendor/css/jquery.dataTables.min.css') }}"/>
  <link rel="stylesheet" href="{{ asset('vendor/css/buttons.dataTables.min.css') }}"/>

@endsection

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <table id="table" class="table table-bordered table-hover display">
          <thead>
          <tr>
            <th>Imie i nazwisko</th>
            <th>Email</th>
            <th>Oddział</th>
            <th>Status</th>
            <th>Rodzaj</th>
            <th>Akcje</th>
          </tr>
          </thead>

          <tbody>
            @foreach($users as $user)
              <tr>
                <td>{{ $user->profile->last_name }} {{ $user->profile->first_name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->department ? $user->department->name : ''}}</td>
                <td>{{ __($user->membership_status) }}</td>
                <td>{{ __($user->membership_kind) }}</td>
                <td>
                  <a href="">Zobacz</a>
                  <a href="">Edytuj</a>
                  <a href="">Usuń</a>
                </td>
              </tr>
            @endforeach
          </tbody>

          <tfoot>
          <tr>
            <th>Imie i nazwisko</th>
            <th>Email</th>
            <th>Oddział</th>
            <th>Status</th>
            <th>Rodzaj</th>
            <th>Akcje</th>
          </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
@endsection

@section('footer')
  <script>
    $(document).ready(function () {
      var table = $('#table').DataTable({
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],

        dom: 'Bflrtip',

        buttons: [
          {
            extend: 'excelHtml5',
            text: 'Eksportuj dane do excela',
            className: 'btn btn-primary btn-sm',
            title: null,
            exportOptions: {
              columns: [0, 1, 2, 3, 4]
            }
          }
        ],
      });

      $('#table thead th:not(:last-child)').each(function () {
        var title = $(this).text();
        $(this).append('<div class="mt-1 filter-search"><input type="text" placeholder="Filtruj ' + title + '" style="width: 100%; padding: 0 6px;" /></div>');
      });

      $('.filter-search').on('click', function (event) {
        event.stopPropagation();
      });

      table.columns().every(function () {
        var that = this;

        $('input', this.header()).on('keyup change clear', function () {
          if (that.search() !== this.value) {
            that
              .search(this.value)
              .draw();
          }
        });
      });
    });
  </script>
@endsection

