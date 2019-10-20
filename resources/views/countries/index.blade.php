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
                                        <a href="" class="btn btn-info btn-sm">Edit</a> |
                                        <a href="" class="btn btn-danger btn-sm">Delete</a>
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

                        var t_data = `
                            <tr>
                                <td>${res.data.id}</td>
                                <td>${res.data.name}</td>
                                <td>${res.data.capital}</td>
                                <td>${res.data.population}</td>
                                <td></td>
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

        // ================= hide alert ====================

        function hide_alert(){
            setTimeout(() => {
                $('.alert').removeClass('alert-danger').removeClass('alert-success').fadeOut();
            }, 2000);
        }

    });
</script>
@endsection
