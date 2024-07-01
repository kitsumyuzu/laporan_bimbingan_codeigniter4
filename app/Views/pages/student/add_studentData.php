<!-- Wrapper -->

    <div class="content-wrapper">

    <!-- Heading -->

        <div class="content-header">

            <div class="container-fluid">

                <div class="row mb-2">

                    <!-- Button Cancel -->

                        <div class="col-sm-6">

                            <h1 class="m-0">

                                <a href="<?= base_url('/home/student') ?>">
                            
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

                                <li class="breadcrumb-item active">add_student</li>

                            </ol>

                        </div>

                </div>

            </div>

        </div>

    <!-- Content -->

        <section class="content">

            <div class="container">

                <form action="<?= base_url('/home/action_add_studentData') ?>" method="post" autocomplete="off">
            

                    <div class="row">

                        <!-- User form -->

                            <?php

                                if (in_array(session() -> get('ranks'), [1])) {

                            ?>
                            
                                <div class="col-md-6">

                                    <div class="card">

                                        <div class="card-header d-flex justify-content-center align-items-center">

                                            <h3 class="card-title font-weight-bold">Account</h3>

                                        </div>

                                        <div class="card-body">

                                            <!-- User forms input -->

                                                <div class="row">

                                                    <div class="col-md">

                                                        <label for="username">Username <span style="color: #ff0000;"> *</span></label>

                                                        <input type="text" class="form-control" name="authentication_username" id="username" maxlength="20" required autofocus>

                                                    </div>

                                                    <div class="form-group col-md">

                                                        <label for="password">Password <span style="color: #ff0000;"> *</span></label>

                                                        <div class="input-group">

                                                            <input type="password" class="form-control" name="authentication_password" id="password" maxlength="26" required autofocus>

                                                            <div class="input-group-append">

                                                                <span class="input-group-text" id="show-password"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                        </div>

                                    </div>

                                </div>
                            
                            <?php

                                }

                            ?>

                            <div class="col-md-6">

                                <div class="card">

                                    <div class="card-header d-flex justify-content-center align-items-center">

                                        <h3 class="card-title font-weight-bold">Student</h3>

                                    </div>

                                    <div class="card-body">
                                        
                                        <div class="mx-auto">

                                            <label for="nis">NIS <span style="color: #ff0000;"> *</span></label>

                                            <input type="number" class="form-control" name="student_nis" id="nis" maxlength="10" required>

                                        </div>

                                        <div class="row">

                                            <div class="col-md">

                                                <label for="first-name">First Name <span style="color: #ff0000;"> *</span></label>

                                                <input type="text" class="form-control" name="student_first_name" id="first-name" maxlength="50" required>

                                            </div>

                                            <div class="col-md">

                                                <label for="last-name">Last Name</label>

                                                <input type="text" class="form-control" name="student_last_name" id="last-name" maxlength="50">

                                            </div>
                                            
                                        </div>

                                        <div class="row">

                                            <div class="col-md">

                                                <label for="birthdate">BirthDate</label>

                                                <input type="date" class="form-control" name="student_birth_date" id="birthdate">

                                            </div>

                                            <div class="col-md">

                                                <label for="birthplace">BirthPlace</label>

                                                <input type="text" class="form-control" name="student_birth_place" id="birthplace" maxlength="255">

                                            </div>

                                        </div>


                                        <div class="mx-auto">

                                            <label for="gender">Gender <span style="color: #ff0000;"> *</span></label>

                                            <select class="form-control" name="student_gender" id="gender" required>

                                                <option selected disabled>Select Gender</option>

                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                    <option value="Perempuan">Perempuan</option>

                                            </select>
                                                        
                                        </div>

                                        <div class="row">

                                            <div class="col-md">

                                                <label for="address">Address</label>
                                                
                                                <input type="text" class="form-control" name="student_address" id="address" maxlength="225">

                                            </div>

                                            <div class="form-group col-md">

                                                <label for="phone-number">Phone Number</label>

                                                <div class="input-group">

                                                    <span class="input-group-text">+62</span>
                                                   
                                                    <input type="tel" class="form-control" name="student_phone_number" id="phone-number" placeholder="8XX-XXXX-XXXX" pattern="8[0-9]{2}-[0-9]{4}-[0-9]{4,5}" maxlength="15">

                                                </div>

                                            </div>

                                        </div>

                                        <div class="mx-auto">

                                            <label for="class">Class <span style="color: #ff0000;"> *</span></label>

                                            <select class="form-control" name="student_class" id="class" required>

                                            <option selected disabled>Select Class</option>

                                                <option value="RPL XI A">RPL XI A</option>
                                                <option value="RPL XI B">RPL XI B</option>
                                                <option value="RPL XI C">RPL XI C</option>
                                                <option value="AKL XI">AKL XI</option>
                                                <option value="BDP XI">BDP XI</option>

                                            </select>

                                        </div>
                                        
                                    </div>

                                    <div class="card-footer">

                                        <button type="submit" class="btn btn-success font-weight-bold">Submit</button>

                                    </div>

                                </div>

                            </div>

                    </div>

                </form>
                
            </div>

        </section>

    </div>