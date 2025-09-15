@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('keywords', 'Dashboard, Dashboard')
@section('description', 'Dashboard')

@section('content')
    <!-- Button to trigger modal -->
    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" id="modal-open">
        Open Form
    </button>


    <input type="text" id="searchInput" placeholder="Search..." class="mt-4 mb-4 p-2 border border-gray-300 rounded" />
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">S.N.</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200" id="dataTable">

        </tbody>
    </table>
@endsection


@push('modal')
    <!-- Modal -->
    <div id="myModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <form class="mt-3" id="contactForm">
                <h3 class="text-lg font-medium text-gray-900">Add New Contact</h3>
                <div class="mt-2">
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">S.N.</label>
                            <input type="number" name="serial_number"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                placeholder="Enter serial number">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" name="name"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                placeholder="Enter name">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" name="email"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                placeholder="Enter email">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Phone</label>
                            <input type="tel" name="phone"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                placeholder="Enter phone number">
                        </div>
                    </div>
                </div>
                <div class="mt-4 flex justify-end space-x-2">
                    <button type="button" class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400"
                        onclick="document.getElementById('myModal').classList.add('hidden')">
                        Cancel
                    </button>
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
@endpush


@push('scripts')
    <script>
        $(document).ready(function() {
            $('#modal-open').click(function() {
                $('#myModal').removeClass('hidden');
            });

            function getData(filter = null) {
                $('#dataTable').empty();
                var content = '';
                var url = "?getData";
                if (filter != null) {
                    url = "?getData&filter=" + filter;
                }
                $.ajax({
                    type: "GET",
                    url: url,
                    success: function(response) {
                        if (response.data.length > 0) {
                            response.data.forEach((item, index) => {
                                // console.log(item.is_active)
                                var is_active = item.is_active ? 'text-green-500' :
                                    'text-red-500';

                                content += '<tr class="' + is_active + '">';
                                content +=
                                    '<td class="px-6 py-4 whitespace-nowrap text-sm">' +
                                    index + '</td>';
                                content +=
                                    '<td class="px-6 py-4 whitespace-nowrap text-sm">' +
                                    item.title + '</td>';
                                content +=
                                    '<td class="px-6 py-4 whitespace-nowrap text-sm">' +
                                    item.email + '</td>';
                                content +=
                                    '<td class="px-6 py-4 whitespace-nowrap text-sm">' +
                                    item.phone + '</td>';
                                content +=
                                    '<td class="px-6 py-4 whitespace-nowrap text-sm"> <button class="bg-green-500 text-white px-2 py-1 rounded hover:bg-green-600 status-button" data-id="' +
                                    item.id + '">Status</button> </td>';
                                content += '</tr>';
                            });
                        }
                        $('#dataTable').append(content);
                    }
                });
            }

            getData();

            $(document).on('click', '.status-button', function() {
                var id = $(this).data('id');
                console.log(id);
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You want to change the status!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, change it!'
                }).then((result) => {
                    console.log(result)
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "GET",
                            url: "?statusChange",
                            data: {
                                id: id
                            },
                            success: function(response) {
                                Swal.fire({
                                    title: response.status ? 'Success!' :
                                        'Error!',
                                    text: response.message,
                                    icon: response.status ? 'success' : 'error',
                                    showCancelButton: false,
                                    confirmButtonColor: '#3085d6',
                                    confirmButtonText: 'Confirm'
                                });
                                getData();
                            }
                        });
                    }
                })
            });

            // To Submit
            $('#contactForm').submit(function(e) {
                e.preventDefault();
                console.log("here");
                var data = $(this).serializeArray();
                console.log(data);

                $.ajax({
                    type: "POST",
                    url: "{{ route('info.store') }}",
                    data: data,
                    success: function(response) {
                        console.log(response);
                        Swal.fire({
                            title: response.status ? 'Success!' : 'Error!',
                            text: response.message,
                            icon: response.status ? 'success' : 'error',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Cool'
                        })
                        $('#myModal').addClass('hidden');
                        $('#contactForm')[0].reset();
                        getData();
                    }
                });
            });

            $('#searchInput').on('input', function() {
                var valueofInput = $(this).val();
                getData(valueofInput);
            });
        });
    </script>
@endpush
