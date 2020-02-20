@extends('layouts.admin')

@include('partials.datatables')

@section('content')
    <table id="table" class="table table-bordered table-hover display">
        <thead>
        <tr>
            <th>Nazwa</th>
            <th>Prezes</th>
            <th>Sekretarz</th>
            <th>Skarbnik</th>
            <th>Akcje</th>
        </tr>
        </thead>

        <tbody>
        @foreach($departments as $department)
            <tr>
                <td>{{ $department->name }}</td>
                <td>{{ $department->president ? $department->president->profile->first_name . ' ' . $department->president->profile->last_name : '' }}</td>
                <td>{{ $department->secretary ? $department->secretary->profile->first_name . ' ' . $department->secretary->profile->last_name : '' }}</td>
                <td>{{ $department->paymaster ? $department->paymaster->profile->first_name . ' ' . $department->paymaster->profile->last_name : '' }}</td>
                <td width="100">
                    <a href=""><i class="far fa-eye"></i></a>
                    <a href=""><i class="far fa-edit"></i></a>
                    <a href=""><i class="far fa-trash-alt"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>

        <tfoot>
        <tr>
            <th>Nazwa</th>
            <th>Prezes</th>
            <th>Sekretarz</th>
            <th>Skarbnik</th>
            <th>Akcje</th>
        </tr>
        </tfoot>
    </table>
@endsection

@section('footer')
  <script>
    $(document).ready(function () {
      var table = $('#table').DataTable({
        "lengthMenu": [[25, 50, 100, -1], [25, 50, 100, "All"]],

        dom: 'Bflrtip',

        buttons: [
          {
            extend: 'excelHtml5',
            text: 'Eksportuj dane do excela',
            className: 'btn btn-primary btn-sm',
            title: null,
            exportOptions: {
              columns: [0, 1, 2, 3]
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

