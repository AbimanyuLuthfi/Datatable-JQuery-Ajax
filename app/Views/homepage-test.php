<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
                        <input type="text" class="form-control no_telp" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label>Email</label><span id="error_email" class="text-danger ms-3"></span>
                        <input type="email" class="form-control email" placeholder="Nama">
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
                <div class="modal-header bg-info">
                    <h1 class="modal-title fs-5 text-white" id="addModalLabel">Delete Data</h1>
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

    <div class="container">
        <div class="row">
            <div class="col-md-12 my-4">
                <h1 class="text-center">JQuery Ajax CRUD Application></h1>
            </div>
            <div class="col-md-12 my-4">
                <div class="card">
                    <div class="card-header">
                        <h4> JQuery Ajax Data
                            <a href="#" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addModal">Add</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
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

                            </tbody>
                        </table>
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


    <script>
        $(document).ready(function() {
            loaddata();

            $(document).on('click', '.edit_btn', function() {

                var data_id = $(this).closest('tr').find('.data_id').text();

                $.ajax({
                    type: "POST",
                    url: "data/edit",
                    data: {
                        'data_id': data_id
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
                        $('.data-information').html("");
                        loaddata();

                        alertify.set('notifier', 'position', 'top-right');
                        alertify.success(response.status);
                    }
                })
            });

            $(document).on('click', '.delete_btn', function () {
                var data_id = $(this).closest('tr').find('.data_id').text();
                $('#dataDeleteModal').modal('show')
            });
        });

        function loaddata() {
            $.ajax({
                method: "GET",
                url: "data/index",
                success: function(response) {
                    //console.log(response.data);
                    $.each(response.data, function(key, value) {
                        // console.log(value['name']);
                        $('.data-information').append('<tr>\
                        <td class="data_id">' + value['id'] + '</td>\
                        <td>' + value['nama'] + '</td>\
                        <td>' + value['no_telp'] + '</td>\
                        <td>' + value['email'] + '</td>\
                        <td>' + value['created_at'] + '</td>\
                        <td>\
                        <a href="#" class="btn btn-info edit_btn">Edit</a>\
                        <a href="#" class="btn btn-danger delete_btn">Delete</a>\
                        </td>\
                        </tr>');
                    });
                }
            });
        }
    </script>

    <script>
        $(document).ready(function() {
            $(document).on('click', '.ajaxdata-save', function() {

                if ($.trim($('.nama').val()).length == 0) {
                    error_nama = 'Name Cannot Be Empty!!';
                    $('#error_nama').text(error_nama);
                } else {
                    error_nama = '';
                    $('#error_nama').text(error_nama);
                }
                if ($.trim($('.no_telp').val()).length == 0) {
                    error_no_telp = 'Please Fill Your Phone Number!!';
                    $('#error_no_telp').text(error_no_telp);
                } else {
                    error_no_telp = '';
                    $('#error_no_telp').text(error_no_telp);
                }
                if ($.trim($('.email').val()).length == 0) {
                    error_email = 'Email Cannot Be Empty!!';
                    $('#error_email').text(error_email);
                } else {
                    error_email = '';
                    $('#error_email').text(error_email);
                }

                if (error_nama != '' || error_no_telp != '' || error_email != '') {
                    return false;
                } else {
                    var data = {
                        'nama': $('.nama').val(),
                        'no_telp': $('.no_telp').val(),
                        'email': $('.email').val(),
                    }
                    $.ajax({
                        method: "POST",
                        url: "create/data/post",
                        data: data,
                        success: function(response) {
                            $('#addModal').modal('hide');
                            $('#addModal').find('input').val('');
                            $('.data-information').html("");
                            loaddata();

                            alertify.set('notifier', 'position', 'top-right');
                            alertify.success(response.status);
                        }
                    })
                }
            });
        });
    </script>


</body>

</html>