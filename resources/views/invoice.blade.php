
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <td>@id</td>
                <td>name</td>
                <td>Description</td>
                <td>Date</td>
            </tr>

            @foreach ($cat as $t)
                <tr>
                    <td>{{$t->id}}</td>
                    <td>{{$t->name}}</td>
                    <td>{{$t->description}}</td>
                    <td>{{$t->created_at}}</td>
                </tr>
            @endforeach
        </table>
    </div>