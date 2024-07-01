<!-- Content wrapper -->

    <div class="content-wrapper">

    <!-- Page header -->

        <div class="content-header">

            <div class="container-fluid">

                <div class="row mb-2">

                    <div class="col-sm-6">

                        <h1 class="m-0">Account</h1>

                    </div>

                    <div class="col-sm-6">

                        <ol class="breadcrumb float-sm-right">

                            <li class="breadcrumb-item active"><a href="<?= base_url('/home/dashboard') ?>" style="color: #ADB5DB;">Home</a></li>
                            <li class="breadcrumb-item active">Account</li>

                        </ol>

                    </div>
        
                </div>

            </div>

        </div>


    <!-- Page content -->

    <section class="content">

        <div class="container-fluid">

            <div class="row">

                <div class="col-12">

                    <div class="card">
                        
                        <!-- Card body / content -->

                            <div class="card-body">

                                <table id="table-responsive" class="table table-bordered table-hover">

                                    <thead>

                                        <tr>

                                            <th width="5%">No.</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Ranks</th>

                                            <!-- Only admin can see this -->

                                                <?php

                                                    if (in_array(session() -> get('ranks'), [1])) {

                                                ?>

                                                    <th width="5%">Action</th>

                                                <?php

                                                    }

                                                ?>

                                        </tr>

                                    </thead>

                                    <tbody>

                                        <?php

                                            $row = 1;

                                            foreach ($account as $_data) {

                                        ?>

                                            <tr>

                                                <td align="center"><?php echo $row++ ?>.</td>
                                                <td><?php echo $_data -> username ?></td>
                                                <td><?php echo $_data -> password ?></td>
                                                <td><?php echo ucwords($_data -> ranks_data) ?></td>

                                                <!-- Only admin can see this -->

                                                    <?php

                                                        if (in_array(session() -> get('ranks'), [1])) {

                                                    ?>

                                                        <td align="center">

                                                            <a href="<?= base_url('/home/account_password_reset/'.$_data -> _idUser) ?>">
                                                
                                                                <button class="btn btn-warning"><i class="fas fa-rotate" style="color: #fff;"></i></button>
                                                                
                                                            </a>

                                                        </td>

                                                    <?php

                                                        }

                                                    ?>
                                                
                                            </tr>

                                        <?php

                                            }

                                        ?>
                                        
                                    </tbody>

                                </table>

                            </div>

                    </div>

                </div>

            </div>

        </div>

    </section>