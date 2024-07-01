<!-- Content wrapper -->

    <div class="content-wrapper">

    <!-- Page header -->

        <div class="content-header">

            <div class="container-fluid">

                <div class="row mb-2">

                    <div class="col-sm-6">

                        <h1 class="m-0">Report Cards</h1>

                    </div>

                    <div class="col-sm-6">

                        <ol class="breadcrumb float-sm-right">

                            <li class="breadcrumb-item active"><a href="<?= base_url('/home/dashboard') ?>" style="color: #ADB5DB;">Home</a></li></li>
                            <li class="breadcrumb-item active">Reports</li>

                        </ol>

                    </div>
        
                </div>

            </div>

        </div>

    <!-- Card body -->

        <section class="content">
            
            <div class="container-fluid">

                <div class="row">

                    <div class="col-12">

                        <div class="card">

                            <!-- Card Heading -->

                            <div class="card-header">

                                <!-- Tab selection -->

                                    <ul class="nav nav-tabs" role="tablist">

                                        <li class="nav-item">

                                            <a class="nav-link active" id="home-tab" data-toggle="pill" href="#tab-disagree" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true" style="color: #fff">Belum Disetujui</a>

                                        </li>

                                        <li class="nav-item">

                                            <a class="nav-link" id="home-tab" data-toggle="pill" href="#tab-success" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true" style="color: #fff;">Disetujui</a>

                                        </li>

                                    </ul>

                            </div>

                            <!-- Card Body -->

                            <div class="card-body">

                                <div class="tab-content">

                                    <div class="tab-pane fade show active" id="tab-disagree" role="tabpanel">

                                        <table class="table table-bordered table-striped">

                                            <thead>

                                                <tr>

                                                    <th width="5%">No.</th>
                                                    <th width="8%">NIS</th>
                                                    <th width="15%">Nama</th>
                                                    <th width="8%">Kelas</th>
                                                    <th width="15%">Tanggal Bimbingan</th>
                                                    <th width="15%">Status</th>

                                                    <?php

                                                        if (in_array(session() -> get('ranks'), [1, 3, 4])) {

                                                    ?>

                                                        <th width="15%">Action</th>

                                                    <?php

                                                        }
                                                    
                                                    ?>

                                                </tr>

                                            </thead>

                                            <tbody>

                                                <?php

                                                    if (in_array(session() -> get('ranks'), [1])) {

                                                ?>

                                                    <?php

                                                        $row = 1;

                                                        foreach($reports as $_data) {

                                                    ?>

                                                        <tr>

                                                            <?php

                                                                if ($_data -> _cardStatus == 'belum disetujui') {

                                                            ?>

                                                                <td align="center"><?php echo $row++ ?>.</td>
                                                                <td><?php echo $_data -> student_NIS ?></td>
                                                                <td><?php echo ucwords($_data -> student_first_name) . ' ' . ucwords($_data -> student_last_name) ?></td>
                                                                <td><?php echo $_data -> student_class ?></td>
                                                                <td><?php echo $_data -> student_report_guidance_date ?></td>

                                                                <td>

                                                                    <button class="btn btn-danger" role="button" id="disabled">Belum Disetujui</button>

                                                                </td>

                                                                <?php

                                                                    if (in_array(session() -> get('ranks'), [1, 2, 3, 4])) {

                                                                ?>

                                                                    <td>

                                                                        <a href="<?= base_url('/home/report_cards_status/'.$_data -> _idCard) ?>">

                                                                            <button class="btn btn-success" role="button" id="enabled">Setujui</button>

                                                                        </a>

                                                                    </td>

                                                                <?php

                                                                    }

                                                                ?>

                                                            <?php

                                                                }

                                                            ?>

                                                        </tr>

                                                    <?php

                                                        }

                                                    ?>

                                                <?php

                                                    } else if(in_array(session() -> get('ranks'), [2, 3, 4])) {

                                                ?>

                                                    <?php

                                                        $row = 1;

                                                        foreach($reports as $_data) {

                                                            if ($_data -> student_guidance_teacher == session() -> get('id')) {

                                                    ?>

                                                        <tr>

                                                            <?php

                                                                if ($_data -> _cardStatus == 'belum disetujui') {

                                                            ?>

                                                                <td align="center"><?php echo $row++ ?>.</td>
                                                                <td><?php echo $_data -> student_NIS ?></td>
                                                                <td><?php echo ucwords($_data -> student_first_name) . ' ' . ucwords($_data -> student_last_name) ?></td>
                                                                <td><?php echo $_data -> student_class ?></td>
                                                                <td><?php echo $_data -> student_report_guidance_date ?></td>

                                                                <td>

                                                                    <button class="btn btn-danger" role="button" id="disabled">Belum Disetujui</button>

                                                                </td>

                                                                <?php

                                                                    if (in_array(session() -> get('ranks'), [1, 2, 3, 4])) {

                                                                ?>

                                                                    <td>

                                                                        <a href="<?= base_url('/home/report_cards_status/'.$_data -> _idCard) ?>">

                                                                            <button class="btn btn-success" role="button" id="enabled">Setujui</button>

                                                                        </a>

                                                                    </td>

                                                                <?php

                                                                    }

                                                                ?>

                                                            <?php

                                                                }

                                                            ?>

                                                        </tr>

                                                    <?php

                                                            }

                                                        }

                                                    ?>

                                                <?php

                                                    } else if (in_array(session() -> get('ranks'), [5])) {

                                                ?>

                                                    <?php

                                                        $row = 1;

                                                        foreach($reports as $_data) {

                                                            if ($_data -> _cardUser == session() -> get('id')) {

                                                    ?>

                                                        <tr>

                                                            <?php

                                                                if ($_data -> _cardStatus == 'belum disetujui') {

                                                            ?>

                                                                <td align="center"><?php echo $row++ ?>.</td>
                                                                <td><?php echo $_data -> student_NIS ?></td>
                                                                <td><?php echo ucwords($_data -> student_first_name) . ' ' . ucwords($_data -> student_last_name) ?></td>
                                                                <td><?php echo $_data -> student_class ?></td>
                                                                <td><?php echo $_data -> student_report_guidance_date ?></td>

                                                                <td>

                                                                    <button class="btn btn-danger" role="button" id="disabled">Belum Disetujui</button>

                                                                </td>

                                                                <?php

                                                                    if (in_array(session() -> get('ranks'), [1, 2, 3, 4])) {

                                                                ?>

                                                                    <td>

                                                                        <a href="<?= base_url('/home/report_cards_status/'.$_data -> _idCard) ?>">

                                                                            <button class="btn btn-success" role="button" id="enabled">Setujui</button>

                                                                        </a>

                                                                    </td>

                                                                <?php

                                                                    }

                                                                ?>

                                                            <?php

                                                                }

                                                            ?>

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

                                    <div class="tab-pane fade" id="tab-success" role="tabpanel">

                                        <table id="table-responsive" class="table table-bordered table-striped">

                                            <thead>

                                                <tr>

                                                    <th width="5%">No.</th>
                                                    <th width="8%">NIS</th>
                                                    <th width="15%">Nama</th>
                                                    <th width="8%">Kelas</th>
                                                    <th width="15%">Tanggal Bimbingan</th>
                                                    <th width="15%">Status</th>

                                                </tr>

                                            </thead>

                                            <tbody>

                                                <?php

                                                    if (in_array(session() -> get('ranks'), [1])) {
                                                
                                                ?>

                                                    <?php

                                                        $row = 1;

                                                        foreach($reports as $_data) {

                                                    ?>

                                                        <tr>

                                                            <?php

                                                                if ($_data -> _cardStatus == 'disetujui') {

                                                            ?>

                                                                <td align="center"><?php echo $row++ ?>.</td>
                                                                <td><?php echo $_data -> student_NIS ?></td>
                                                                <td><?php echo ucwords($_data -> student_first_name) . ' ' . ucwords($_data -> student_last_name) ?></td>
                                                                <td><?php echo $_data -> student_class ?></td>
                                                                <td><?php echo $_data -> student_report_guidance_date ?></td>

                                                                <td>

                                                                    <a href="<?= base_url('/home/report_cards_history') ?>">

                                                                        <button class="btn btn-success" role="button" id="enabled">Disetujui</button>
                                                                    
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

                                                    } else if (in_array(session() -> get('ranks'), [2, 3, 4])) {

                                                ?>

                                                    <?php

                                                        $row = 1;

                                                        foreach($reports as $_data) {

                                                            if ($_data -> student_guidance_teacher == session() -> get('id')) {

                                                    ?>

                                                        <tr>

                                                            <?php

                                                                if ($_data -> _cardStatus == 'disetujui') {

                                                            ?>

                                                                <td align="center"><?php echo $row++ ?>.</td>
                                                                <td><?php echo $_data -> student_NIS ?></td>
                                                                <td><?php echo ucwords($_data -> student_first_name) . ' ' . ucwords($_data -> student_last_name) ?></td>
                                                                <td><?php echo $_data -> student_class ?></td>
                                                                <td><?php echo $_data -> student_report_guidance_date ?></td>

                                                                <td>

                                                                    <a href="<?= base_url('/home/report_cards_history') ?>">

                                                                        <button class="btn btn-success" role="button" id="enabled">Disetujui</button>
                                                                    
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

                                                    } else if (in_array(session() -> get('ranks'), [5])) {

                                                ?>

                                                    <?php

                                                        $row = 1;

                                                        foreach($reports as $_data) {

                                                            if ($_data -> _cardUser == session() -> get('id')) {

                                                    ?>

                                                        <tr>

                                                            <?php

                                                                if ($_data -> _cardStatus == 'disetujui') {

                                                            ?>

                                                                <td align="center"><?php echo $row++ ?>.</td>
                                                                <td><?php echo $_data -> student_NIS ?></td>
                                                                <td><?php echo ucwords($_data -> student_first_name) . ' ' . ucwords($_data -> student_last_name) ?></td>
                                                                <td><?php echo $_data -> student_class ?></td>
                                                                <td><?php echo $_data -> student_report_guidance_date ?></td>

                                                                <td>

                                                                    <a href="<?= base_url('/home/report_cards_history') ?>">

                                                                        <button class="btn btn-success" role="button" id="enabled">Disetujui</button>
                                                                    
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

                                                    }

                                                ?>

                                            </tbody>

                                        </table>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div>

                            <a href="<?= base_url('/home/add_reportCardsData') ?>">

                                <button class="btn btn-success"><i class="fas fa-user-plus"></i></button>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </section>