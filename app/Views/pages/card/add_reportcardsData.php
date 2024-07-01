<!-- Wrapper -->

    <div class="content-wrapper">

    <!-- Heading -->

        <div class="content-header">

            <div class="container-fluid">

                <div class="row mb-2">

                    <!-- Button Cancel -->

                        <div class="col-sm-6">

                            <h1 class="m-0">

                                <a href="<?= base_url('/home/report_cards') ?>">
                            
                                    <button class="btn btn-danger font-weight-bold" role="button">Cancel</button>

                                </a>

                            </h1>

                        </div>

                    <!-- Order List -->

                        <div class="col-sm-6">

                            <ol class="breadcrumb float-sm-right">

                                <li class="breadcrumb-item active">

                                    <a href="<?= base_url('/home/dashboard') ?>" style="color: #ADB5DB;">Home</a>
                                    
                                </li>

                                <li class="breadcrumb-item active">add_report_card</li>

                            </ol>

                        </div>

                </div>

            </div>

        </div>

    <!-- Content -->

        <section class="content">

            <div class="container">

                <form action="<?= base_url('/home/action_add_reportCardsData') ?>" method="post" autocomplete="off">
            

                    <div class="row">

                        <!-- Data Form -->

                            <div class="col-md-6">

                                <div class="card card-success">

                                    <div class="card-header d-flex justify-content-center align-items-center">

                                        <h3 class="card-title font-weight-bold">Report Guidance 1</h3>

                                    </div>

                                    <div class="card-body">

                                        <!-- Data forms input -->

                                        <div class="col-md">

                                            <label for="report_card_row_1">Row 1</label>

                                            <input type="text" class="form-control" name="guidance1_row_1" id="report_card_row_1">
                                            
                                        </div>

                                        <div class="col-md">

                                            <label for="report_card_row_2">Row 2</label>

                                            <input type="text" class="form-control" name="guidance1_row_2" id="report_card_row_2">
                                            
                                        </div>

                                        <div class="col-md">

                                            <label for="report_card_row_3">Row 3</label>

                                            <input type="text" class="form-control" name="guidance1_row_3" id="report_card_row_3">
                                            
                                        </div>

                                        <div class="col-md">

                                            <label for="report_card_row_4">Row 4</label>

                                            <input type="text" class="form-control" name="guidance1_row_4" id="report_card_row_4">
                                            
                                        </div>

                                        <div class="col-md">

                                            <label for="report_card_row_5">Row 5</label>

                                            <input type="text" class="form-control" name="guidance1_row_5" id="report_card_row_5">
                                            
                                        </div>

                                    </div>

                                    <div class="card-footer">

                                        <button type="submit" class="btn btn-success font-weight-bold">Submit</button>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="card card-danger">

                                    <div class="card-header d-flex justify-content-center align-items-center">

                                        <h3 class="card-title font-weight-bold">Report Guidance 2</h3>

                                    </div>

                                    <div class="card-body">

                                        <!-- Data forms input -->

                                        <div class="col-md">

                                            <label for="report_card_row_1">Row 1</label>

                                            <input type="text" class="form-control" name="guidance2_row_1" id="report_card_row_1">
                                            
                                        </div>

                                        <div class="col-md">

                                            <label for="report_card_row_2">Row 2</label>

                                            <input type="text" class="form-control" name="guidance2_row_2" id="report_card_row_2">
                                            
                                        </div>

                                        <div class="col-md">

                                            <label for="report_card_row_3">Row 3</label>

                                            <input type="text" class="form-control" name="guidance2_row_3" id="report_card_row_3">
                                            
                                        </div>

                                        <div class="col-md">

                                            <label for="report_card_row_4">Row 4</label>

                                            <input type="text" class="form-control" name="guidance2_row_4" id="report_card_row_4">
                                            
                                        </div>

                                        <div class="col-md">

                                            <label for="report_card_row_5">Row 5</label>

                                            <input type="text" class="form-control" name="guidance2_row_5" id="report_card_row_5">
                                            
                                        </div>

                                    </div>

                                </div>

                            </div>

                    </div>

                </form>
                
            </div>

        </section>

    </div>