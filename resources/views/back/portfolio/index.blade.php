@extends('back.master')

@section('page-title')
    Manage Portfolio Items
@endsection

@section('page-styles')
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('back/plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/plugins/table/datatable/dt-global_style.css') }}">
    <!-- END PAGE LEVEL STYLES -->
@endsection

@section('page-content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>Manage Portfolio Items</h3>
                </div>
            </div>

            <div class="row" id="cancel-row">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <div class="table-responsive mb-4 mt-4">
                            <table id="zero-config" class="table table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Production Date</th>
                                        <th>Category</th>
                                        <th class="no-content"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($portfolio_list as $item)
                                    <tr>
                                        <th>{{ $item->image }}</th>
                                        <th>{{ $item->name }}</th>
                                        <th>{{ $item->production_date }}</th>
                                        <th>{{ $item->category_id }}</th>
                                        <td><a href="/portfolio/{{ $item->id }}" class="btn btn-secondary mr-2" target="_blank">View</a><a href="/admin/portfolio/{{ $item->id }}/edit" class="btn btn-primary">Edit</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Production Date</th>
                                        <th>Category</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection


@section('page-scripts')
    <script src="{{ asset('back/plugins/table/datatable/datatables.js') }}"></script>
    <script>
        $('#zero-config').DataTable({
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
            "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7
        });
    </script>
@endsection
