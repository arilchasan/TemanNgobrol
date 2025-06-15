@extends('admin.components.app')

@section('container')
    @if (session()->has('error'))
        <div class="w-1/1 relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg mb-2 mx-auto"
            style="height: 50px;" role="alert" id="error-alert">
            <p>{{ session('error') }}</p>
            <span class="absolute inset-y-0 right-0 flex items-center mr-4" onclick="closeAlert('error-alert')">
                <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20">
                    <path
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd" fill-rule="evenodd"></path>
                </svg>
            </span>
        </div>
    @endif
    @if (session()->has('success'))
        <div class="w-1/1 relative py-3 pl-4 pr-10 leading-normal text-green-700 bg-green-100 rounded-lg mb-2 mx-auto"
            style="height: 50px;" role="alert" id="success-alert">
            <p>{{ session('success') }}</p>
            <span class="absolute inset-y-0 right-0 flex items-center mr-4" onclick="closeAlert('success-alert')">
                <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20">
                    <path
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd" fill-rule="evenodd"></path>
                </svg>
            </span>
        </div>
    @endif

    <style>
        /* Search input */
        .dataTables_wrapper .dataTables_filter input {
            background-color: #ffffff !important;
            color: #1f2937 !important;
            /* Tailwind gray-800 */
            border: 1px solid #d1d5db;
            /* gray-300 */
            border-radius: 0.375rem;
            /* rounded-md */
            padding: 0.5rem 0.75rem;
            /* px-3 py-2 */
            font-size: 0.875rem;
            /* text-sm */
        }

        /* Paginate length select dropdown */
        .dataTables_wrapper .dataTables_length select {
            background-color: #ffffff !important;
            color: #1f2937 !important;
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
            padding: 0.5rem 0.75rem;
            font-size: 0.875rem;
        }

        /* Sorting arrows */
        table.dataTable thead .sorting,
        table.dataTable thead .sorting_asc,
        table.dataTable thead .sorting_desc {
            color: #4b5563 !important;
            /* Tailwind gray-600 */
            background-color: transparent !important;
        }

        /* Optional: style paginate buttons */
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            color: #374151 !important;
            /* Tailwind gray-700 */
            background-color: #f9fafb !important;
            /* gray-50 */
            border: 1px solid #d1d5db;
            padding: 0.25rem 0.75rem;
            margin: 0 2px;
            border-radius: 0.25rem;
            font-size: 0.875rem;
        }
    </style>

    <!-- component -->
    <div class="card shadow m-2 p-3">
        <div class="card-header border-0 flex justify-between items-center mb-2">
            <h3 class="text-start font-semibold text-2xl">Users Management</h3>
            {{-- <a href="" class="btn btn-success ml-2 leading-2 px-3">+ Users</a> --}}
        </div>
        <div class="table-responsive">
            <table id="user-table" class="table align-items-center table-flush ">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" style="width: 20%">Name</th>
                        <th scope="col" style="width: 20%">Email</th>
                        <th scope="col" style="width: 20%">Token</th>
                        <th scope="col" style="width: 20%">Expired At</th>
                        <th scope="col" style="width: 20%">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>
<link href="https://cdn.datatables.net/1.13.6/css/dataTables.tailwindcss.min.css" rel="stylesheet">

<script>
    $(document).ready(function() {
        var table = $('#user-table').DataTable({
            ordering: true,
            order: [
                [2, 'desc']
            ],
            processing: true,
            serverSide: true,
            responsive: true,
            searchDelay: 500,
            pageLength: 5,
            pagingType: 'simple',
            lengthMenu: [5, 10, 25, 50, 100],
            ajax: "{{ route('dashboard.users.data') }}",
            language: {
                "paginate": {
                    "next": "<i class='fas fa-angle-right' ></i>",
                    "previous": "<i class='fas fa-angle-left' ></i>"
                },
                //"loadingRecords": "Loading...",
                //"processing": "Processing...",
                "search": "",
                "searchPlaceholder": "Search",
                "emptyTable": "No data available",
                "lengthMenu": "_MENU_ ",
                "zeroRecords": "No matching records found",
                "info": "Showing _END_ of _TOTAL_ entries",
                "infoEmpty": "Showing 0 of 0 entries",
                "infoFiltered": "(filtered from _MAX_ total entries)",

            },
            columns: [{
                    data: 'name',
                    name: 'name',
                    ordering: true,
                    search: true,
                    render: function(data, type, row, meta) {
                        return `
                            <th scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">${data}</span>
                                    </div>
                                </div>
                            </th>`;
                    }
                },
                {
                    data: 'email',
                    name: 'email',
                    ordering: true,
                    search: true,
                    render: function(data, type, row, meta) {
                        return `
                            <th scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">${data}</span>
                                    </div>
                                </div>
                            </th>`;
                    }
                },
                {
                    data: 'remember_token',
                    name: 'remember_token',
                    ordering: true,
                    search: true,
                    render: function(data, type, row, meta) {
                        return `
                            <th scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">${data}</span>
                                    </div>
                                </div>
                            </th>`;
                    }
                },
                {
                    data: 'expired_at',
                    name: 'expired_at',
                    ordering: true,
                    search: true,
                    orderSequence: ['desc', 'asc'],
                    render: function(data, type, row, meta) {
                        return `
                            <th scope="row">
                                <div class="media">
                                    <div class="media-body">
                                      ${data}
                                    </div>
                                </div>
                            </th>`;
                    }
                },
                {
                    data: 'action',
                    name: 'action',
                    ordering: true,
                    search: true,
                    render: function(data, type, row, meta) {
                        return `
                            <th scope="row">
                                <div class="media">
                                    <div class="media-body">
                                      ${data}
                                    </div>
                                </div>
                            </th>`;
                    }
                }
            ],
        });
    });


    function closeAlert(alertId) {
        var alert = document.getElementById(alertId);
        if (alert) {
            alert.style.display = 'none';
        }
    }
</script>
