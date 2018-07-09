<?php require('includes/config.php'); //if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); exit(); } //define page title 
$title = 'SMS LOG'; ?>

<!doctype html>
<html lang="en">
    <head>
        <title>SMS LOG</title>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link
            href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            rel="stylesheet">
    </head>

    <body>
        <!-- NAVBAR -->
        <nav class="navbar sticky-top navbar-expand-md navbar-dark">
            <a class="navbar-brand">
                <span class="icon">&#xf013;</span>
                SMS Server LOG</a>
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="chart.php">Charts</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="sms.php">Live</a>
                    </li>
                </ul>

                <ul class="navbar-nav  ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="memberpage.php">Welcome,
                            <?php echo htmlspecialchars($_SESSION['username'], ENT_QUOTES); ?>
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='logout.php'>Logout</a>
                    </li>
                </ul>

            </div>
        </nav>

        <!-- END OF NAVBAR -->

        <br/>

        <section id="main">
            <div class="container-fluid">
                <div class="row">

                    <!-- SIDEBAR -->
                    <div class="col-md-3" id="leftCol">

                        <!-- <br/> -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Disk Space Used</h4>
                                <div class="progress card-text">
                                    <div
                                        class="progress-bar"
                                        role="progressbar"
                                        style="width: 70%;"
                                        aria-valuenow="70"
                                        aria-valuemin="0"
                                        aria-valuemax="100">70%</div>
                                </div>
                                <hr/>
                                <h4 class="card-title">Bandwith Used</h4>
                                <div class="progress card-text">
                                    <div
                                        class="progress-bar"
                                        role="progressbar"
                                        style="width: 40%;"
                                        aria-valuenow="40"
                                        aria-valuemin="0"
                                        aria-valuemax="100">40%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF SIDEBAR -->

                    <!--LIVE DATA UPDATE-->
                    <div class="col-sm-9">
                        <div class="card">
                            <h5 class="card-header main-color-bg" id="livetransaction">Live Overview</h5>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="card dash-box">
                                            <div class="card-body">
                                                <h2 class="card-title">
                                                    <span class="icon">&#xf003;
                                                    </span>203
                                                </h2>
                                                <p class="card-text">Total SMS Masuk</p>
                                            </div>
                                            <a href="#" class="btn btn-primary btn-lg btn-block">Pantau Langsung</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 dash-box">
                                        <div class="card bg-success">
                                            <div class="card-body white-text">
                                                <h2 class="card-title">
                                                    <span class="icon">&#xf00c;
                                                    </span>44
                                                </h2>
                                                <p class="card-text">Transaksi Berhasil</p>
                                            </div>
                                            <a href="#" class="btn btn-primary btn-lg btn-block">Pantau Langsung</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 ">
                                        <div class="card bg-danger">
                                            <div class="card-body dash-box white-text">
                                                <h2 class="card-title">
                                                    <span class="icon">&#xf00d;
                                                    </span>203
                                                </h2>
                                                <p class="card-text">Transaksi Gagal</p>
                                            </div>
                                            <a href="#" class="btn btn-primary btn-lg btn-block">Pantau Langsung</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END LIVE DATA UDPATE -->
                        <br/>
                        <!-- SMS TABEL -->

                        <!-- END OF SMS TABEL -->

                        <br/>
                        <!-- CHARTS -->

                        <!-- END CHARTS -->

                    </div>

                </div>
            </div>
        </div>
    </div>1
</section>

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script
    src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>