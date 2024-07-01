<!-- Content wrapper -->

    <div class="content-wrapper">

    <!-- Page header -->

        <div class="content-header">

            <div class="container-fluid">

                <div class="row mb-2">

                    <div class="col-sm-6">

                        <h1 class="m-0">Teacher</h1>

                    </div>

                    <div class="col-sm-6">

                        <ol class="breadcrumb float-sm-right">

                            <li class="breadcrumb-item active"><a href="<?= base_url('/home/dashboard') ?>" style="color: #ADB5DB;">Home</a></li>
                            <li class="breadcrumb-item active">Teacher</li>

                        </ol>

                    </div>
        
                </div>

            </div>

        </div>


    <!-- Page content -->

    <section class="content">

        <div class="container-fluid">

            <div class="row">

                <div class="col-md">

                    <div class="card">
                        
                        <!-- Card body / content -->

                            <div class="card-body">

                                <table id="table-responsive" class="table table-bordered table-hover">

                                    <thead>

                                        <tr>

                                            <th width="5%">No.</th>
                                            <th>NIK</th>
                                            <th>Teacher Name</th>
                                            <th>Birth Date</th>
                                            <th>Birth Place</th>
                                            <th>Gender</th>
                                            <th>Phone Number</th>
                                            <th>Address</th>

                                            <!-- Only admin can see this -->

                                                <?php

                                                    if (in_array(session() -> get('ranks'), [1])) {

                                                ?>

                                                    <th width="10%">Action</th>

                                                <?php

                                                    }

                                                ?>

                                        </tr>

                                    </thead>

                                    <tbody>

                                        <?php

                                            $row = 1;

                                            foreach($teacher as $_data) {

                                        ?>

                                            <tr>

                                                <td align="center"><?php echo $row++ ?>.</td>
                                                <td <?php if ($_data -> teacher_NIK == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> teacher_NIK ? ucwords($_data -> teacher_NIK) : '-' ?></td>
                                                <td <?php if ($_data -> teacher_first_name == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> teacher_first_name ? ucwords($_data -> teacher_first_name) . ' ' . ucwords($_data -> teacher_last_name) : '-' ?></td>
                                                <td <?php if ($_data -> teacher_birth_date == '0000-00-00' || $_data -> teacher_birth_date == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> teacher_birth_date && $_data -> teacher_birth_date !== '0000-00-00' ? ucwords($_data -> teacher_birth_date) : '-' ?></td>
                                                <td <?php if ($_data -> teacher_birth_place == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> teacher_birth_place ? ucwords($_data -> teacher_birth_place) : '-' ?></td>
                                                <td <?php if ($_data -> teacher_gender == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> teacher_gender ? ucwords($_data -> teacher_gender) : '-' ?></td>
                                                <td <?php if ($_data -> teacher_phone_number == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> teacher_phone_number ? ucwords($_data -> teacher_phone_number) : '-' ?></td>
                                                <td <?php if ($_data -> teacher_address == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> teacher_address ? ucwords($_data -> teacher_address) : '-' ?></td>

                                                <!-- Only admin can see this -->

                                                    <?php

                                                        if (in_array(session() -> get('ranks'), [1])) {

                                                    ?>

                                                        <td align="center">

                                                            <a href="<?= base_url('/home/delete_teacherData/'.$_data -> _teacherUser) ?>">
                                                
                                                                <button class="btn btn-danger"><i class="fas fa-trash" style="color: #fff;"></i></button>

                                                            </a>

                                                            <a href="<?= base_url('/home/edit_teacherData/'.$_data -> _teacherUser) ?>">
                                                
                                                                <button class="btn btn-secondary"><i class="fas fa-pen-to-square" style="color: #fff;"></i></button>

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

                    <!-- Add new data -->

                        <?php

                            if (in_array(session() -> get('ranks'), [1])) {

                        ?>
                        
                            <a href="<?= base_url('/home/add_teacherData') ?>">
                                
                                <button class="btn btn-success"><i class="fas fa-user-plus"></i></button>
                            
                            </a>

                        <?php

                            }

                        ?>

                </div>

            </div>

        </div>

    </section>