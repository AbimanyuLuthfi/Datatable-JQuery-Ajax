<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

</head>

<body>

    <!-- Add Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h1 class="modal-title fs-5 text-white" id="addModalLabel">Add Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama</label><span id="error_nama" class="text-danger ms-3"></span>
                        <input type="text" class="form-control nama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label>No Telp</label><span id="error_no_telp" class="text-danger ms-3"></span>
                        <input type="text" class="form-control no_telp" placeholder="No Telp">
                    </div>
                    <div class="form-group">
                        <label>Email</label><span id="error_email" class="text-danger ms-3"></span>
                        <input type="email" class="form-control email" placeholder="Email">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary ajaxdata-save">Save</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Edit Modal -->
    <div class="modal fade" id="dataEditModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h1 class="modal-title fs-5 text-white" id="addModalLabel">Edit Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="data_id">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" id="data_nama" class="form-control nama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label>No Telp</label>
                        <input type="text" id="data_no_telp" class="form-control no_telp" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" id="data_email" class="form-control email" placeholder="Nama">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary ajaxdata-update">Update</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="dataDeleteModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h1 class="modal-title fs-5 text-white" id="addModalLabel">Delete Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" id="data_delete_id">
                    <h4>Are You Sure Want To Delete This Data??</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger ajaxdata-deletebtn">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 my-4">
                <h1 class="text-center">JQuery Ajax CRUD Application</h1>
            </div>
            <div class="col-md-12 my-4">
                <div class="card">
                    <div class="card-header">
                        <h4> JQuery Ajax Data
                            <a href="#" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addModal">Add</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <!-- <table class="table table-bordered" id="data-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>No Telp</th>
                                    <th>Email</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="data-information">
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table> -->

                        <div class="table-responsive">
                            <table class="table data-information">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Email</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />

    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>


    <script>
        $(document).ready(function() {
            loaddata();



            // $(document).on('click', '.delete_btn', function() {
            //     var data_id = $(this).closest('tr').find('.data_id').text();
            //     $('#data_delete_id').val(data_id);
            //     $('#dataDeleteModal').modal('show');
            // });

        });

        // function loaddata() {
        //     $.ajax({
        //         method: "GET",
        //         url: "data/index",
        //         success: function(response) {
        //             //console.log(response.data);
        //             $.each(response.data, function(key, value) {
        //                 // console.log(value['name']);
        //                 $('.data-information').append('<tr>\
        //                 <td class="data_id">' + value['id'] + '</td>\
        //                 <td>' + value['nama'] + '</td>\
        //                 <td>' + value['no_telp'] + '</td>\
        //                 <td>' + value['email'] + '</td>\
        //                 <td>' + value['created_at'] + '</td>\
        //                 <td>\
        //                 <a href="#" class="btn btn-warning edit_btn">Edit</a>\
        //                 <a href="#" class="btn btn-danger delete_btn">Delete</a>\
        //                 </td>\
        //                 </tr>');
        //             });
        //         }
        //     });
        // }

        // function loaddata() {

        //     $.ajax({
        //         method: "GET",
        //         url: "data/index",
        //         dataType: "json", // tambahkan dataType untuk mengambil data dalam format JSON
        //         success: function(response) {
        //             //console.log(response);
        //             $('.data-information').DataTable({ // inisialisasi DataTable pada tabel yang memiliki ID 'data-table'
        //                 data: response.data, // memasukkan data ke dalam DataTable
        //                 columns: [ // menentukan kolom pada DataTable
        //                     {
        //                         data: 'id'
        //                     },
        //                     {
        //                         data: 'nama'
        //                     },
        //                     {
        //                         data: 'no_telp'
        //                     },
        //                     {
        //                         data: 'email'
        //                     },
        //                     {
        //                         data: 'created_at'
        //                     },
        //                     {
        //                         data: null, // membuat kolom kosong untuk tombol edit dan delete
        //                         render: function(data, type, row) {
        //                             return '<a href="#" class="btn btn-warning edit_btn">Edit</a>\
        //                             <a href="#" class="btn btn-danger delete_btn">Delete</a>';
        //                         }
        //                     }
        //                 ]
        //             });
        //         }
        //     });
        // }
    </script>

    <script>
        // $(document).ready(function() {
        //     $(document).on('click', '.ajaxdata-save', function() {

        //         if ($.trim($('.nama').val()).length == 0) {
        //             error_nama = 'Name Cannot Be Empty!!';
        //             $('#error_nama').text(error_nama);
        //         } else {
        //             error_nama = '';
        //             $('#error_nama').text(error_nama);
        //         }
        //         if ($.trim($('.no_telp').val()).length == 0) {
        //             error_no_telp = 'Please Fill Your Phone Number!!';
        //             $('#error_no_telp').text(error_no_telp);
        //         } else {
        //             error_no_telp = '';
        //             $('#error_no_telp').text(error_no_telp);
        //         }
        //         if ($.trim($('.email').val()).length == 0) {
        //             error_email = 'Email Cannot Be Empty!!';
        //             $('#error_email').text(error_email);
        //         } else {
        //             error_email = '';
        //             $('#error_email').text(error_email);
        //         }

        //         if (error_nama != '' || error_no_telp != '' || error_email != '') {
        //             return false;
        //         } else {
        //             var data = {
        //                 'nama': $('.nama').val(),
        //                 'no_telp': $('.no_telp').val(),
        //                 'email': $('.email').val(),
        //             }
        //             var table = $('.data-information').DataTable({
        //                 "ajax": {
        //                     "url": "data/index",
        //                     "dataSrc": "data"
        //                 },
        //                 "columns": [{
        //                         "data": "id"
        //                     },
        //                     {
        //                         "data": "nama"
        //                     },
        //                     {
        //                         "data": "no_telp"
        //                     },
        //                     {
        //                         "data": "email"
        //                     },
        //                     {
        //                         "data": "created_at"
        //                     },
        //                     {
        //                         "data": null,
        //                         "render": function(data, type, full, meta) {
        //                             return '<a href="#" class="btn btn-warning edit_btn">Edit</a>\
        //                 <a href="#" class="btn btn-danger delete_btn">Delete</a>';
        //                         }
        //                     }
        //                 ]
        //             });
        //             $.ajax({
        //                 method: "POST",
        //                 url: "create/data/post",
        //                 data: data,
        //                 success: function(response) {
        //                     $('#addModal').modal('hide');
        //                     $('#addModal').find('input').val('');
        //                     $('#data-table').ajax.reload();

        //                     alertify.set('notifier', 'position', 'top-right');
        //                     alertify.success(response.status);
        //                 }
        //             })
        //         }
        //     });
        // });


        $(document).ready(function() {
            var table = $('.data-information').DataTable({
                "ajax": {
                    "url": "data/index",
                    "dataSrc": "data"
                },
                "columns": [{
                        "data": "id"
                    },
                    {
                        "data": "nama"
                    },
                    {
                        "data": "no_telp"
                    },
                    {
                        "data": "email"
                    },
                    {
                        "data": "created_at"
                    },
                    {
                        "data": null,
                        "render": function(data, type, full, meta) {
                            return '<a href="#" class="btn btn-warning edit_btn">Edit</a>\
                    <a href="#" class="btn btn-danger delete_btn">Delete</a>';
                        }
                    }
                ]
            });

            $(document).on('click', '.ajaxdata-save', function() {
                var nama = $('.nama').val();
                var no_telp = $('.no_telp').val();
                var email = $('.email').val();

                if ($.trim(nama).length == 0) {
                    error_nama = 'Name Cannot Be Empty!!';
                    $('#error_nama').text(error_nama);
                } else {
                    error_nama = '';
                    $('#error_nama').text(error_nama);
                }
                if ($.trim(no_telp).length == 0) {
                    error_no_telp = 'Please Fill Your Phone Number!!';
                    $('#error_no_telp').text(error_no_telp);
                } else {
                    error_no_telp = '';
                    $('#error_no_telp').text(error_no_telp);
                }
                if ($.trim(email).length == 0) {
                    error_email = 'Email Cannot Be Empty!!';
                    $('#error_email').text(error_email);
                } else {
                    error_email = '';
                    $('#error_email').text(error_email);
                }

                if (error_nama != '' || error_no_telp != '' || error_email != '') {
                    return false;
                } else {
                    $.ajax({
                        method: "POST",
                        url: "create/data/post",
                        data: {
                            'nama': nama,
                            'no_telp': no_telp,
                            'email': email,
                        },
                        success: function(response) {
                            $('#addModal').modal('hide');
                            $('#addModal').find('input').val('');
                            // $('.data-information').ajax.reload();
                            $('.data-information').DataTable().ajax.reload();

                            alertify.set('notifier', 'position', 'top-right');
                            alertify.success(response.status);
                        }
                    });
                }
            });

            $(document).on('click', '.edit_btn', function() {

                var data = table.row($(this).parents('tr')).data();

                $.ajax({
                    type: "POST",
                    url: "data/edit",
                    data: {
                        'data_id': data['id']
                    },
                    success: function(response) {
                        $.each(response, function(key, datavalue) {
                            $('#data_id').val(datavalue['id']);
                            $('#data_nama').val(datavalue['nama']);
                            $('#data_no_telp').val(datavalue['no_telp']);
                            $('#data_email').val(datavalue['email']);
                            $('#dataEditModal').modal('show')
                        });
                    }
                });

            });

            $(document).on('click', '.ajaxdata-update', function() {
                var data = {
                    'data_id': $('#data_id').val(),
                    'nama': $('#data_nama').val(),
                    'no_telp': $('#data_no_telp').val(),
                    'email': $('#data_email').val(),
                };

                $.ajax({
                    type: "POST",
                    url: "data/update",
                    data: data,
                    success: function(response) {
                        $('#dataEditModal').modal('hide');
                        $('.data-information').DataTable().ajax.reload();

                        alertify.set('notifier', 'position', 'top-right');
                        alertify.success(response.status);
                    }
                })
            });

            $(document).on('click', '.delete_btn', function() {
                var data = table.row($(this).parents('tr')).data();
                $('#data_delete_id').val(data['id']);
                $('#dataDeleteModal').modal('show');
            });

            $(document).on('click', '.ajaxdata-deletebtn', function() {
                var data_id = $('#data_delete_id').val();

                $.ajax({
                    type: "POST",
                    url: "data/delete",
                    data: {
                        'data_id': data_id
                    },
                    success: function(response) {
                        $('#dataDeleteModal').modal('hide');
                        $('.data-information').DataTable().ajax.reload();

                        alertify.set('notifier', 'position', 'top-right');
                        alertify.success(response.status);
                    }
                });
            });
        });
    </script>


</body>

</html>