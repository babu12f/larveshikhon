<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <form action="/users/create" method="POST">
            @csrf

            <div class="form-group">
                <label>First name</label>
                <input type="text" class="form-control" name="firstname" placeholder="First Name">
            </div>

            <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" name="lastname" placeholder="Last Name">
            </div>
            
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone" placeholder="Phone">
            </div>

            <div class="form-group">
                <label>Date of Birst</label>
                <input type="date" class="form-control" name="date_of_birth">
            </div>

            <div class="form-group">
                <label>User Name</label>
                <input type="text" class="form-control" name="user_name">
            </div>

            <hr>
            <h2>Profile information</h2>

            <div class="form-group">
                <label>Profile Picture</label>
                <input type="text" class="form-control" name="profile_pic" placeholder="Profile Pic">
            </div>

            <div class="form-group">
                <label>Bio</label>
                <input type="text" class="form-control" name="bio" placeholder="Bio">
            </div>

            <div class="form-group">
                <label>Adress</label>
                <input type="text" class="form-control" name="address" placeholder="Adress">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>
</html>