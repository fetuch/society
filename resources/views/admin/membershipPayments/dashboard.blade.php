@extends('layouts.admin')

@include('partials.datatables')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table id="table" class="table table-bordered table-hover display">
                    <thead>
                    <tr>
                        <th>Oddział</th>
                        <th>Ilość członków</th>
                        <th>Opłacona składka</th>
                        <th>Brak składki</th>
                        <th>Kwota dla oddziału</th>
                        <th>Kwota dla PtoiTr</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($departments as $department)
                        <tr>
                            <td>{{ $department->name }}</td>
                            <td align="center">{{ $department->members->count() }}</td>
                            <td align="center">{{ $department->membership_payments->count() }}</td>
                            <td align="center">{{ $department->members->count() - $department->membership_payments->count() }}</td>
                            <td align="center">{{ $department->membership_payments->sum('amount') / 2 }}</td>
                            <td align="center">{{ $department->membership_payments->sum('amount') / 2 }}</td>
                        </tr>
                    @endforeach
                    </tbody>

                    <tfoot>
                    <tr>
                        <th>Oddział</th>
                        <th>Ilość członków</th>
                        <th>Opłacona składka</th>
                        <th>Brak składki</th>
                        <th>Kwota dla oddziału</th>
                        <th>Kwota dla PtoiTr</th>
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
                "lengthMenu": [[25, 50, 100, -1], [25, 50, 100, "All"]],

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
        });
    </script>
@endsection

