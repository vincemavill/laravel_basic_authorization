<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="col-md-6">
            <h1>User Login</h1>
            <form id="formlogin">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>






    $("#formlogin").submit(function(e){

        // var clientId = "vince";
        // var clientSecret = "admin";

        // var authorizationBasic = window.btoa(clientId + ':' + clientSecret);


        var authorizationBasic = "<?php echo $authorization; ?>";

        
        // oAuth.AuthorizationServer
        $.ajax({
            type: 'POST',
            url: "http://127.0.0.1:8000/api/submit_login",
            
            // data: { email: 'vincemavill@gmail.com', password: 'doodle'},
            data: $("#formlogin").serialize(),
            // dataType: "json",
            contentType: 'application/x-www-form-urlencoded; charset=utf-8',
            xhrFields: {
            withCredentials: true
            },
            // crossDomain: true,
            headers: {
            'Authorization': 'Basic ' + authorizationBasic
            },
            //beforeSend: function (xhr) {
            //},
            success: function (result) {
            var token = result;
            alert(authorizationBasic);
            console.log(result);
            },
            //complete: function (jqXHR, textStatus) {
            //},
            error: function (req, status, error) {
            alert(error);
            }
        });


    e.preventDefault();
    });



    </script>

  </body>
</html>