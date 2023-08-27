<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="description" content="Aplikasi eKontrak Kabupaten Sleman">
    <meta name="author" content="Integra Inovasi Indonesia">
    <meta name="keyword" content="Bootstrap,Admin,Template,jQuery,CSS,HTML,RWD,Dashboard,Vue">
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>eKontrak - Kabupaten Sleman</title>
    <link href="css/public-app.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body id="public-5" class="app">
    <div class="background-wrapper w-100"></div>
    <div class="p-0" style="min-height: 100vh;">
        <nav id="nav-menu" class="navbar navbar-expand-lg navbar-dark bg-blue-2 fixed-top"
            style="border-bottom: 1px solid #fff">
            <div class="px-3 py-1 d-flex flex-row">
                <div class="px-2"> <img class="d-none d-sm-block mr-2" src="img/logo-kab.png" width="40" height="auto">
                    <img class="d-block d-sm-none mr-2" src="img/logo-kab.png" width="30" height="auto"> </div>
                <div class="text-white">
                    <h4 class="d-block d-sm-none title mb-0 mt-1">eKontrak Sleman</h4>
                    <h4 class="d-none d-sm-block title mb-0">eKontrak</h4>
                    <div class="d-none d-sm-block" style="letter-spacing: 3px;">Kabupaten Sleman</div>
                </div>
            </div> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span
                    class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <div class="mr-4 py-2 pl-md-2 pr-md-0">
                    <div id="ig-tahun" class="input-group input-group-sm input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-primary font-weight-bold"
                                style="background-color: rgb(10 122 127) !important;">Tahun</div>
                        </div> <select class="form-control form-control-sm" name="tahun">
                            <option value="2023">2023</option>
                        </select>
                    </div>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item font-weight-bold"> <a
                            class="nav-link mr-3"href="#"> Sample Name <span
                                class="sr-only">(current)</span></a> </li>
                    <li class="nav-item font-weight-bold"> <a class="nav-link" href="admin">Login<span class="sr-only">(current)</span></a> </li>
                </ul>
            </div>
        </nav>

    
        <div class="p-0 d-flex flex-column flex-wrap">
            <div id="content"> 

            <div class="container container-bigger bg-white" style="height: 1000px">
            <div class="row">
                <div class="col-12 px-0">
                   
                </div>
            </div>

            </div>


            </div>
            <div class="container container-bigger bg-white">
                <div class="row">
                    <div class="col-12 px-0">
                        <h6 class="bg-dark text-center text-white py-4 mb-0"
                            style="text-transform: uppercase;letter-spacing: 3px"> Copyright 2021 Pemerintah Kabupaten
                            Sleman </h6>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="modal fade" id="dm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-danger" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"> <i class="fa fa-warning"></i> LOGIN GAGAL</h4> <button type="button"
                        class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body"> </div>
                <div class="modal-footer login"> <button type="button" class="btn btn-primary"
                        data-dismiss="modal">Close</button> </div>
            </div>
        </div>
    <!-- </div>
</body>

</html>