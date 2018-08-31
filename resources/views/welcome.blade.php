<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1,  shrink-to-fit=no">

        <title>Laravel</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('/css/mystyle.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body class="text-center">

      <main role="main">

        <div class="row">
        <div class="container col align-self-center bg-dark" style="padding:240px; color:white">
            <h1 class="cover-heading">Project Management Platform</h1>
            <p class="lead">Students can now check their project supervisors and also list of all approved paired student with supervisors and apporved project topics</p>
            <p class="lead">
            <a href="#lists" class="btn btn-lg btn-secondary">display approved list</a>
            </p>
        </div>
        </div>

        <div class="row " style="">

            <div class="container col-md-3">
            <div class="text-center">
            <h3 style="padding:20px">Student project checker</h3>
            </div>

             <form class="form-signin" style="margin:50px">
                    <input class="form-control" type="text" name="matric" placeholder="Matric number" aria-label="matric">
                    <br>
                    <button class="btn btn-outline-success btn-lg btn-block" type="button" data-toggle="modal" data-target="#details">view project details</button>
                </form>
             </div> 

            <div class="container col-md-4 offset-md-2">
            <div class="text-center">
            <h3 style="padding:20px">Project coordinator login</h3>
            </div>
                <form class="form-signin" style="margin:50px">
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="email" class="form-control" placeholder="Email address" required autofocus>
                    <br>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="passwrd" class="form-control" placeholder="Password" required>
                    <br>
                    <button class="btn btn-lg btn-primary btn-block" onclick="window.location='{{url('/dashboard')}}' " type="button">Proceed</button>
                </form>
            </div>
        </div>

        <div class="bg-light container" id="lists" >
            <h3 class="text-center">Approved Project Topics</h3>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Project topic</th>
                            <th scope="col">Student Matric</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <th scope="row">{{ $project->id }}</th>
                            <th>{{ $project->projectTopic }}</th>
                            <th>{{ $project->matricNo }}</th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
        
        </div>

        <!-- Modal -->
        <div class="modal fade" id="details" tabindex="-1" role="dialog" aria-labelledby="details" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-bold" id="details">Project Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>PROJECT MANAGEMENT SYSTEM</h5>
                <h6>AIM:</h6>
                <p>to develop a web based project management system</p>
                <h6></h6>
                <h6>SUPERVISED BY:</h6>
                <p>Dr OLADEJO</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>


        



        <footer class="mastfoot mt-auto" style="margin:50px">
            <div class="inner">
                <h6>Created and developed by:</h6>
                <h2>GROUP 1C</h2>
                <p>Alagbala 198283</p>
                <p>Alagbala 198283</p>
                <p>Alagbala 198283</p>
                <p>Alagbala 198283</p>
                <p>Alagbala 198283</p>
            </div>
        </footer>
      </main>
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
            $('#myModal').on('shown.bs.modal', function () {
                $('#myInput').trigger('focus')
            })
    </script>
    </body>
</html>
