@extends('layouts.admin')

@include('partials.datatables')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table id="table" class="table table-bordered table-hover display">
                    <thead>
                    <tr>
                        <th>Okres</th>
                        <th>Członek zwyczajny</th>
                        <th>Rezydent</th>
                        <th>Akcje</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($fees as $fee)
                        <tr>
                            <td align="center">{{ $fee->period }}</td>
                            <td align="center">{{ $fee->default }}</td>
                            <td align="center">{{ $fee->resident }}</td>
                            <td align="center">
                                <a href=""><i class="far fa-eye"></i></a>
                                <a href=""><i class="far fa-edit"></i></a>
                                <a href=""><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                    <tfoot>
                    <tr>
                        <th>Okres</th>
                        <th>Członek zwyczajny</th>
                        <th>Rezydent</th>
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
                "lengthMenu": [[25, 50, 100, -1], [25, 50, 100, "All"]],

                dom: 'Bflrtip',

                buttons: [
                    {
                        extend: 'excelHtml5',
                        text: 'Eksportuj dane do excela',
                        className: 'btn btn-primary btn-sm',
                        title: null,
                        exportOptions: {
                            columns: [0, 1, 2]
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

