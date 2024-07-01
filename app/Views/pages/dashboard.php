<!-- Content wrapper -->

    <div class="content-wrapper">

    <!-- Page header -->

        <div class="content-header">

            <div class="container-fluid">

                <div class="row mb-2">

                    <div class="col-sm-6">

                        <h1 class="m-0">Dashboard</h1>

                    </div>

                    <div class="col-sm-6">

                        <ol class="breadcrumb float-sm-right">

                            <li class="breadcrumb-item active">Home</li>
                            <li class="breadcrumb-item active">Dashboard</li>

                        </ol>

                    </div>
        
                </div>

            </div>

        </div>


    <!-- Page content -->

        <div class="container d-flex justify-content-center align-items-center">

            <div class="card">

                <div class="card-header">

                    <h3 class="card-title col-md text-center text-weight-bold">

                        <i class="fas fa-door-open fa-bounce" style="color: #28A745;"></i>
                        <small class="breadcrumb-item active col-sm-3"> Welcome, <?php echo session() -> get('username') ?> </small>
                        
                    </h3>

                </div>

                <div class="card-body">

                    <iframe src="https://discord.com/widget?id=866714560521568276&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>

                </div>

            </div>

        </div>