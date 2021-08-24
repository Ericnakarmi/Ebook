<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up </title>
    <link rel="stylesheet" href="{{asset('bootstrap-4.3.1-dist/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/public/assets/css/form.css')}}">

</head>

<body>
<div class="container">
    <div class = "row" style="margin-top:45px">
</div class="col-md-4 col-md-offset-4">
    <h4>Sign Up </h4>
    <form action="{{route("registers.store")}}" method="POST">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Full Name">
            <br>
            <label>Email</label>
            <input type="text" class="form-control" name="email" placeholder="Enter Email Address">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter Password">
            
            <br>

            <label>Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" placeholder="Re-enter Password">
            <br>    
            <label>Contact Number</label>
            <input type="text" class="form-control" name="contact" placeholder="Enter Contact Number">

        </div>
        <button type="submit" class="btn-block btn-primary">Resgister</button>
            <br>
            <a href="{{url('registers/login')}}">I already have an account</a>
    </form>

 
</div>    


</body>
</html>