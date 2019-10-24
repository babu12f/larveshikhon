@extends('layouts.app')

@section('content')
<div class="container">
    @include('partials.success_message')

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Country List
                    <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal">
                        Add New Country
                    </button>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Name</th>
                                <th>Capital</th>
                                <th>Population</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="country_table">
                            @foreach ($countries as $country)
                                <tr>
                                    <td>{{$country->id}}</td>
                                    <td>{{$country->name}}</td>
                                    <td>{{$country->capital}}</td>
                                    <td>{{$country->population}}</td>
                                    <td>
                                        <a href="" class="btn btn-info btn-sm edit_country" data-country="{{$country}}">Edit</a> |
                                        <a href="" class="btn btn-danger btn-sm delete_country" data-delete="{{$country->id}}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div id="validation_msg" class="alert" role="alert">
            </div>
            <form action="" id="country_form">
                <div class="form-group">
                    <label for="name">Country Name</label>
                    <input id="name" type="text" class="form-control" name="name">
                </div>

                <div class="form-group">
                    <label for="capital">Capital</label>
                    <input id="capital" type="text" class="form-control" name="capital">
                </div>

                <div class="form-group">
                    <label for="population">Population</label>
                    <input id="population" type="text" class="form-control" name="population">
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Country</button>
            </div>
        </form>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="editModalLabel">Edit Country Form</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div id="validation_msg" class="alert" role="alert">
            </div>
            <form action="" id="country_edit_form">
                <input type="hidden" name="id">
                <div class="form-group">
                    <label for="name">Country Name</label>
                    <input id="name" type="text" class="form-control" name="name">
                </div>

                <div class="form-group">
                    <label for="capital">Capital</label>
                    <input id="capital" type="text" class="form-control" name="capital">
                </div>

                <div class="form-group">
                    <label for="population">Population</label>
                    <input id="population" type="text" class="form-control" name="population">
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Country</button>
            </div>
        </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    $(function(){

        $('#country_form').submit(function(e) {
            e.preventDefault();

            var form_data = $('#country_form').serialize();

            $.ajax({
                url: '/countries',
                method: 'POST',
                data: form_data,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function(res){
                    if(!res.status){
                        $('#validation_msg').addClass('alert-danger').show().html(res.message);
                    }else {
                        $('#validation_msg').addClass('alert-success').show().html(res.message);
                        var res_str = JSON.stringify(res.data);

                        var t_data = `
                            <tr>
                                <td>${res.data.id}</td>
                                <td>${res.data.name}</td>
                                <td>${res.data.capital}</td>
                                <td>${res.data.population}</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-sm edit_country" data-country='${res_str}'>Edit</a> |
                                    <a href="#" class="btn btn-danger btn-sm delete_country" data-delete='${res.data.id}'>Delete</a>
                                </td>
                            </tr>`;
                        $('#country_table').append(t_data)
                    }
                    hide_alert();
                },
                error: function(res) {
                    console.log(res);
                }
            });

        });

        // Edit Country

        $('body').on('click','.edit_country', function(e){
            e.preventDefault();
            var country = $(this).data('country');

            $('#editModal form input[name="id"]').val(country.id);
            $('#editModal form input[name="name"]').val(country.name);
            $('#editModal form input[name="capital"]').val(country.capital);
            $('#editModal form input[name="population"]').val(country.population);

            $('#editModal').modal('show');
        });

        // update country
        $('#country_edit_form').submit(function(e) {
            e.preventDefault();

            var form_data = $('#country_edit_form').serialize();
            var country_id = $('#editModal form input[name="id"]').val();
            console.log(country_id);

            $.ajax({
                url: '/countries/'+country_id,
                method: 'PATCH',
                data: form_data,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function(res){
                    window.location.reload();
                    //hide_alert();
                },
                error: function(res) {
                    console.log(res);
                }
            });

        });

        // ======================== Delete COuntry ===========================
        $('body').on('click', '.delete_country', function(e){
            e.preventDefault();

            var row = $(this).parent().parent();
            var country_id = $(this).data('delete');
            console.log(country_id);

            $.ajax({
                url: '/countries/'+country_id,
                method: 'DELETE',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function(res){
                    console.log(res);
                    row.fadeOut(1000);
                    // window.location.reload();
                    //hide_alert();
                },
                error: function(res) {
                    console.log(res);
                }
            });

        });

        // ================= hide alert ====================

        function hide_alert(){
            setTimeout(() => {
                $('.alert').removeClass('alert-danger').removeClass('alert-success').fadeOut();
            }, 2000);
        }

    });
</script>
@endsection
