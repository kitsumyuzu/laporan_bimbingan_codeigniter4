<!-- Content wrapper -->

    <div class="content-wrapper">

    <!-- Page header -->

        <div class="content-header">

            <div class="container-fluid">

                <div class="row mb-2">

                    <div class="col-sm-6">

                        <h1 class="m-0">History</h1>

                    </div>

                    <div class="col-sm-6">

                        <ol class="breadcrumb float-sm-right">

                            <li class="breadcrumb-item active"><a href="<?= base_url('/home/dashboard') ?>" style="color: #ADB5DB;">Home</a></li></li>
                            <li class="breadcrumb-item active"><a href="<?= base_url('/home/report_cards') ?>" style="color: #ADB5DB;">Kartu Bimbingan</a></li>
                            <li class="breadcrumb-item active">History</li>

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

                        <div class="card-header">

                            <h3 class="card-title">Result</h3>

                        </div>

                        <!-- Content -->

                        <div class="card-body">

                            <table id="tableData" class="table table-bordered table-striped">

                                <thead>

                                    <?php 
                                    
                                        if (in_array(session() -> get('ranks'), [3])) {

                                    ?>

                                        <tr class="text-center">

                                            <th rowspan="2">Date</th>
                                            <th colspan="1">Guidance 1</th>

                                        </tr>

                                        <tr class="text-center">

                                            <th>Result</th>

                                        </tr>

                                    <?php

                                        } else if (in_array(session() -> get('ranks'), [4])) {

                                    ?>
        
                                        <tr class="text-center">
        
                                            <th rowspan="2">Date</th>
                                            <th colspan="1">Guidance 1</th>
        
                                        </tr>
        
                                        <tr class="text-center">
        
                                            <th>Result</th>
        
                                        </tr>
        
                                    <?php
        
                                        } else {

                                    ?>

                                        <tr class="text-center">
        
                                            <th rowspan="2">Date</th>
                                            <th colspan="1">Guidance 1</th>
                                            <th colspan="1">Guidance 2</th>
        
                                        </tr>
        
                                        <tr class="text-center">
        
                                            <th>Result</th>
                                            <th>Result</th>
        
                                        </tr>

                                    <?php

                                        }
        
                                    ?>

                                </thead>

                                <tbody>

                                    <?php

                                        if (in_array(session() -> get('ranks'), [3])) {

                                    ?>

                                        <?php

                                            foreach($reports as $_data) {

                                                if ($_data -> student_guidance_teacher == session() -> get('id')) {

                                        ?>

                                            <tr>

                                                <td rowspan="5" class="text-center"><?php echo $_data -> student_report_guidance_date ?></td>
                                                <td <?php if ($_data -> guidance1_row1 == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> guidance1_row1 ? ucwords($_data -> guidance1_row1) : '-' ?></td>

                                            </tr>

                                            <tr>

                                                <td <?php if ($_data -> guidance1_row2 == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> guidance1_row2 ? ucwords($_data -> guidance1_row2) : '-' ?></td>


                                            </tr>

                                            <tr>

                                                <td <?php if ($_data -> guidance1_row3 == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> guidance1_row3 ? ucwords($_data -> guidance1_row3) : '-' ?></td>

                                            </tr>

                                            <tr>

                                                <td <?php if ($_data -> guidance1_row4 == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> guidance1_row4 ? ucwords($_data -> guidance1_row4) : '-' ?></td>

                                            </tr>

                                            <tr>

                                                <td <?php if ($_data -> guidance1_row5 == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> guidance1_row5 ? ucwords($_data -> guidance1_row5) : '-' ?></td>

                                            </tr>

                                        <?php

                                                }

                                            }

                                        ?>

                                    <?php

                                        } else if (in_array(session() -> get('ranks'), [4])) {

                                    ?>

                                        <?php

                                            foreach($reports as $_data) {

                                                if ($_data -> student_guidance_teacher == session() -> get('id')) {

                                        ?>

                                            <tr>

                                                <td rowspan="5" class="text-center"><?php echo $_data -> student_report_guidance_date ?></td>
                                                <td <?php if ($_data -> guidance2_row1 == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> guidance2_row1 ? ucwords($_data -> guidance2_row1) : '-' ?></td>

                                            </tr>

                                            <tr>

                                                <td <?php if ($_data -> guidance2_row2 == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> guidance2_row2 ? ucwords($_data -> guidance2_row2) : '-' ?></td>

                                            </tr>

                                            <tr>

                                                <td <?php if ($_data -> guidance2_row3 == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> guidance2_row3 ? ucwords($_data -> guidance2_row3) : '-' ?></td>

                                            </tr>

                                            <tr>

                                                <td <?php if ($_data -> guidance2_row4 == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> guidance2_row4 ? ucwords($_data -> guidance2_row4) : '-' ?></td>

                                            </tr>

                                            <tr>

                                                <td <?php if ($_data -> guidance2_row5 == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> guidance2_row5 ? ucwords($_data -> guidance2_row5) : '-' ?></td>

                                            </tr>

                                        <?php

                                                }

                                            }

                                        ?>

                                    <?php

                                        } else {

                                    ?>

                                        <?php

                                            foreach($reports as $_data) {

                                                if ($_data -> _cardUser == session() -> get('id')) {

                                        ?>

                                            <tr>

                                                <td rowspan="5" class="text-center"><?php echo $_data -> student_report_guidance_date ?></td>
                                                <td <?php if ($_data -> guidance1_row1 == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> guidance1_row1 ? ucwords($_data -> guidance1_row1) : '-' ?></td>
                                                <td <?php if ($_data -> guidance2_row1 == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> guidance2_row1 ? ucwords($_data -> guidance2_row1) : '-' ?></td>

                                            </tr>

                                            <tr>

                                                <td <?php if ($_data -> guidance1_row2 == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> guidance1_row2 ? ucwords($_data -> guidance1_row2) : '-' ?></td>
                                                <td <?php if ($_data -> guidance2_row2 == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> guidance2_row2 ? ucwords($_data -> guidance2_row2) : '-' ?></td>


                                            </tr>

                                            <tr>

                                                <td <?php if ($_data -> guidance1_row3 == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> guidance1_row3 ? ucwords($_data -> guidance1_row3) : '-' ?></td>
                                                <td <?php if ($_data -> guidance2_row3 == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> guidance2_row3 ? ucwords($_data -> guidance2_row3) : '-' ?></td>

                                            </tr>

                                            <tr>

                                                <td <?php if ($_data -> guidance1_row4 == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> guidance1_row4 ? ucwords($_data -> guidance1_row4) : '-' ?></td>
                                                <td <?php if ($_data -> guidance2_row4 == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> guidance2_row4 ? ucwords($_data -> guidance2_row4) : '-' ?></td>

                                            </tr>

                                            <tr>

                                                <td <?php if ($_data -> guidance1_row5 == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> guidance1_row5 ? ucwords($_data -> guidance1_row5) : '-' ?></td>
                                                <td <?php if ($_data -> guidance2_row5 == '' || NULL) { echo 'class="text-center"'; } ?>><?php echo $_data -> guidance2_row5 ? ucwords($_data -> guidance2_row5) : '-' ?></td>

                                            </tr>

                                        <?php

                                                }

                                            }

                                        ?>

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