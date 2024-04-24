<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <style>
        /* Add your custom styles here */
    </style>
</head>

<body>
    
    <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
        <div class="container">
            <a class="navbar-brand">Dashboard</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class= "nav-item">
                        <a class="nav-link text-dark" href="{{route('dashboard.index')}}">Home</a>  
                    </li>
                    <li class= "nav-item">
                        <a class="nav-link text-dark" href="{{route('meals.index')}}">Meals</a>
                    </li>
                    <li class= "nav-item">
                        <a class="nav-link text-dark" href="{{route('categories.index')}}">Categories</a>
                    </li>
                </ul>
            </div>
            <a href="{{route('logout')}}" class="btn btn-danger">log out</a>
        </div>

        

    </nav>

    <div class="container p-5">
            @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom scripts -->
    <script>
        // Add your custom JavaScript here
    </script>
</body>

</html>
