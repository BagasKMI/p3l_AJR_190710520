<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    link rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>UAJY RENTAL</title>
</head>

<body>

    <div class="container-fluid">
       <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <div class="header">
                        <p class="navbar-brand">Dashboard</p>
                    </div>
                    <ul>
                        <li>
                            <a href="{{url('kendaraan')}}" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-people"></i> <span class="text-light">Aset Kendaraan</span></a>
                        </li>

                        <li>
                            <a href="{{url('')}}" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-people"></i> <span class="text-light">Jadwal</span></a>
                        </li>

                        <li>
                            <a href="{{url('customer')}}" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-people"></i> <span class="text-light">Customer</span> </a>
                        </li>

                        <li>
                            <a href="{{url('promo')}}" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-people"></i> <span class="text-light">Promo</span> </a>
                        </li>
                    </ul>
                </div>
            </div>
           <div class="container-fluid">
               @yield('content')
           </div>
       </div>
    </div>
</body>

</html>