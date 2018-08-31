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
    <body class="row">
        
        <nav class="col-md-2 d-none d-md-block bg-dark sidebar">
        <div class="col-md-3 sidebar-sticky">
            
        <ul class="nav flex-column">    
            <li class="nav-item">
                    <a class="nav-link" href="/dashboard">
                    <span data-feather="merge"></span>
                    Dashboard
                    </a>
                </li>  
              <li class="nav-item">
                <a class="nav-link" href="/edit">
                  <span data-feather="merge"></span>
                  Edit Supervisors and Students Information
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/">
                  <span data-feather="supervisors"></span>
                  logout
                </a>
              </li>
            </ul>
        </div>
        </nav>

        <div class="col-md-9">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <button class="btn btn-sm btn-outline-secondary">Share</button>
                    <button class="btn btn-sm btn-outline-secondary">Export</button>
                </div>
                <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                    <span data-feather="calendar"></span>
                    This week
                </button>
                </div>
            </div>

            <div class="container">
            <h5>Total number of student is</h5>
            </div>

            <div class="container bg-light" id="stdSup">
                <h3 class="text-center">Project supervisors</h3>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Supervisor</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($supervisors as $supervisor)
                        <tr>
                            <th scope="row">{{$supervisor->id}}</th>
                            <th>{{ $supervisor->supervisorName }}</th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>



            <div class="bg-light container" id="lists">
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

        <div class="bg-light container" id="student">
            <h3 class="text-center">Project Students</h3>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Matric number</th>
                            <th scope="col">Student Name</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <th scope="row">{{ $student->id }}</th>
                            <th>{{ $student->matricNo }}</th>
                            <th>{{ $student->studentName }}</th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
        
        </div>

      </div>

        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
            
    </script>
    </body>
</html>
