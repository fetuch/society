@extends('layouts.admin')

@include('partials.datatables')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table id="table" class="table table-bordered table-hover display">
                    <thead>
                    <tr>
                        <th>Osoba wplacająca</th>
                        <th>Rodzaj członkostwa</th>
                        <th>Oddział</th>
                        <th>Wpłata</th>
                        <th>Z dnia</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($payments as $payment)
                        <tr>
                            <td>{{ $payment->member->profile->last_name }} {{ $payment->member->profile->first_name }}</td>
                            <td>{{ __($payment->member->membership_kind) }}</td>
                            <td>{{ $payment->member->department ? $payment->member->department->name : ''}}</td>
                            <td>{{ $payment->amount }}</td>
                            <td>{{ $payment->paid_at->toDateString() }}</td>
                        </tr>
                    @endforeach
                    </tbody>

                    <tfoot>
                    <tr>
                        <th>Osoba wplacająca</th>
                        <th>Rodzaj członkostwa</th>
                        <th>Oddział</th>
                        <th>Wpłata</th>
                        <th>Z dnia</th>
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

            $('#table thead th').each(function () {
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

