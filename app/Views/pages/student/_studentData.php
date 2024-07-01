<!-- Content wrapper -->

    <div class="content-wrapper">

    <!-- Page header -->

        <div class="content-header">

            <div class="container-fluid">

                <div class="row mb-2">

                    <div class="col-sm-6">

                        <h1 class="m-0">Student</h1>

                    </div>

                    <div class="col-sm-6">

                        <ol class="breadcrumb float-sm-right">

                            <li class="breadcrumb-item active"><a href="<?= base_url('/home/dashboard') ?>" style="color: #ADB5DB;">Home</a></li>
                            <li class="breadcrumb-item active">Student</li>

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
                                            <th>NIS</th>
                                            <th>Student Name</th>
                                            <th>Birth Date</th>
                                            <th>Birth Place</th>
                                            <th>Gender</th>
                                            <th>Phone Number</th>
                                            <th width="10%">Address</th>
                                            <th>Class</th>
                                            <th>Guidance Teacher</th>

                                            <!-- Only admin can see this -->

                                                <?php

                                                    if (in_array(session() -> get('ranks'), [1, 2])) {

                                                ?>

                                                    <th width="10%">Action</th>

                                                <?php

                                                    }

                                                ?>

                                        </tr>

                                    </thead>

                                    <tbody>

                                        <?php

                                            if (in_array(session() -> get('ranks'), [3, 4])) {

                                        ?>

                                            <?php

                                                $row = 1;

                                                foreach($student as $_data) {

                                                    if ($_data -> student_guidance_teacher == session() -> get('id')) {

                                            ?>

                                                <tr>

                                                    <td align="center"><?php echo $row++ ?>.</td>
                                                    <td <?php if ($_data -> student_NIS == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> student_NIS ? ucwords($_data -> student_NIS) : '-' ?></td>
                                                    <td <?php if ($_data -> student_first_name == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> student_first_name ? ucwords($_data -> student_first_name) . ' ' . ucwords($_data -> student_last_name) : '-' ?></td>
                                                    <td <?php if ($_data -> student_birth_date == '0000-00-00' || $_data -> student_birth_date == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> student_birth_date && $_data -> student_birth_date !== '0000-00-00' ? ucwords($_data -> student_birth_date) : '-' ?></td>
                                                    <td <?php if ($_data -> student_birth_place == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> student_birth_place ? ucwords($_data -> student_birth_place) : '-' ?></td>
                                                    <td <?php if ($_data -> student_gender == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> student_gender ? ucwords($_data -> student_gender) : '-' ?></td>
                                                    <td <?php if ($_data -> student_phone_number == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> student_phone_number ? ucwords($_data -> student_phone_number) : '-' ?></td>
                                                    <td <?php if ($_data -> student_address == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> student_address ? ucwords($_data -> student_address) : '-' ?></td>
                                                    <td <?php if ($_data -> student_class == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> student_class ? $_data -> student_class : '-' ?></td>
                                                    <td <?php if ($_data -> teacher_first_name == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> teacher_first_name ? ucwords($_data -> teacher_first_name) . ' ' . ucwords($_data -> teacher_last_name) : '-' ?></td>

                                                    <!-- Only admin can see this -->

                                                        <?php

                                                            if (in_array(session() -> get('ranks'), [1])) {

                                                        ?>

                                                            <td align="center">

                                                                <a href="<?= base_url('/home/delete_studentData/'.$_data -> _studentUser) ?>">
                                                            
                                                                    <button class="btn btn-danger"><i class="fas fa-trash" style="color: #fff;"></i></button>

                                                                </a>

                                                                <a href="<?= base_url('/home/edit_studentData/'.$_data -> _studentUser) ?>">
                                                            
                                                                    <button class="btn btn-secondary"><i class="fas fa-pen-to-square" style="color: #fff;"></i></button>

                                                                </a>

                                                            </td>

                                                            <?php

                                                                } else if (in_array(session() -> get('ranks'), [2])) {

                                                            ?>
                                                                <td align="center">

                                                                    <a href="<?= base_url('/home/edit_studentData/'.$_data -> _studentUser) ?>">
                                                            
                                                                        <button class="btn btn-secondary"><i class="fas fa-pen-to-square" style="color: #fff;"></i></button>

                                                                    </a>

                                                                </td>

                                                            <?php

                                                                }

                                                            ?>
                                                        
                                                </tr>

                                            <?php

                                                    }

                                                }

                                            ?>

                                        <?php

                                            } else if (in_array(session() -> get('ranks'), [1, 2])) {

                                        ?>

                                            <?php

                                                $row = 1;

                                                foreach($student as $_data) {

                                            ?>

                                                <tr>

                                                    <td align="center"><?php echo $row++ ?>.</td>
                                                    <td <?php if ($_data -> student_NIS == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> student_NIS ? ucwords($_data -> student_NIS) : '-' ?></td>
                                                    <td <?php if ($_data -> student_first_name == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> student_first_name ? ucwords($_data -> student_first_name) . ' ' . ucwords($_data -> student_last_name) : '-' ?></td>
                                                    <td <?php if ($_data -> student_birth_date == '0000-00-00' || $_data -> student_birth_date == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> student_birth_date && $_data -> student_birth_date !== '0000-00-00' ? ucwords($_data -> student_birth_date) : '-' ?></td>
                                                    <td <?php if ($_data -> student_birth_place == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> student_birth_place ? ucwords($_data -> student_birth_place) : '-' ?></td>
                                                    <td <?php if ($_data -> student_gender == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> student_gender ? ucwords($_data -> student_gender) : '-' ?></td>
                                                    <td <?php if ($_data -> student_phone_number == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> student_phone_number ? ucwords($_data -> student_phone_number) : '-' ?></td>
                                                    <td <?php if ($_data -> student_address == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> student_address ? ucwords($_data -> student_address) : '-' ?></td>
                                                    <td <?php if ($_data -> student_class == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> student_class ? $_data -> student_class : '-' ?></td>
                                                    <td <?php if ($_data -> teacher_first_name == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> teacher_first_name ? ucwords($_data -> teacher_first_name) . ' ' . ucwords($_data -> teacher_last_name) : '-' ?></td>

                                                    <!-- Only admin can see this -->

                                                        <?php

                                                            if (in_array(session() -> get('ranks'), [1])) {

                                                        ?>

                                                            <td align="center">

                                                                <a href="<?= base_url('/home/delete_studentData/'.$_data -> _studentUser) ?>">
                                                            
                                                                    <button class="btn btn-danger"><i class="fas fa-trash" style="color: #fff;"></i></button>

                                                                </a>

                                                                <a href="<?= base_url('/home/edit_studentData/'.$_data -> _studentUser) ?>">
                                                            
                                                                    <button class="btn btn-secondary"><i class="fas fa-pen-to-square" style="color: #fff;"></i></button>

                                                                </a>

                                                            </td>

                                                            <?php

                                                                } else if (in_array(session() -> get('ranks'), [2])) {

                                                            ?>
                                                                <td align="center">

                                                                    <a href="<?= base_url('/home/edit_studentData/'.$_data -> _studentUser) ?>">
                                                            
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
                        
                            <a href="<?= base_url('/home/add_studentData') ?>">
                                
                                <button class="btn btn-success"><i class="fas fa-user-plus"></i></button>
                            
                            </a>

                        <?php

                            }

                        ?>

                </div>

            </div>

        </div>

    </section>