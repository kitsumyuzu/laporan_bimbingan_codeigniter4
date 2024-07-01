<!-- Wrapper -->

    <div class="content-wrapper">

    <!-- Heading -->

        <div class="content-header">

            <div class="container-fluid">

                <div class="row mb-2">

                    <!-- Button Cancel -->

                        <div class="col-sm-6">

                            <h1 class="m-0">

                                <a href="<?= base_url('/home/teacher') ?>">
                            
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

                                <li class="breadcrumb-item active">edit_teacher</li>

                            </ol>

                        </div>

                </div>

            </div>

        </div>

    <!-- Content -->

        <section class="content">

            <div class="container">

                <form action="<?= base_url('/home/action_edit_teacherData') ?>" method="post" autocomplete="off">
            

                    <div class="row">

                        <!-- User form -->

                            <div class="col-md-6">

                                <div class="card">

                                    <div class="card-header d-flex justify-content-center align-items-center">

                                        <h3 class="card-title font-weight-bold">Account</h3>

                                    </div>

                                        <input type="hidden" name="id" value="<?php echo $user -> _idUser ?>">

                                    <div class="card-body">

                                        <!-- User forms input -->

                                            <div class="row">

                                                <div class="col-md">

                                                    <label for="username">Username <span style="color: #ff0000;"> *</span></label>

                                                    <input type="text" class="form-control" name="authentication_username" id="username" maxlength="20" value="<?php echo $user -> username ?>" required autofocus>

                                                </div>

                                                <div class="col-md">

                                                    <label for="ranks">Teacher Ranks <span style="color: #ff0000;"> *</span></label>

                                                    <select class="form-control" name="authentication_ranks" id="ranks" required>

                                                        <option selected disabled>Select Ranks</option>

                                                            <option value="2" <?php echo ($user -> ranks == '2') ? 'selected' : '' ?>>Kajur</option>
                                                            <option value="3" <?php echo ($user -> ranks == '3') ? 'selected' : '' ?>>Guru Pembimbing</option>

                                                    </select>

                                                </div>

                                            </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="card">

                                    <div class="card-header d-flex justify-content-center align-items-center">

                                        <h3 class="card-title font-weight-bold">Teacher</h3>

                                    </div>

                                        <input type="hidden" name="id2" value="<?php echo $teacher -> _teacherUser ?>">

                                    <div class="card-body">
                                        
                                        <div class="mx-auto">

                                            <label for="nik">NIK <span style="color: #ff0000;"> *</span></label>

                                            <input type="number" class="form-control" name="teacher_nik" id="nik" maxlength="18" value="<?php echo $teacher -> teacher_NIK ?>" required>

                                        </div>

                                        <div class="row">

                                            <div class="col-md">

                                                <label for="first-name">First Name <span style="color: #ff0000;"> *</span></label>

                                                <input type="text" class="form-control" name="teacher_first_name" id="first-name" maxlength="50" value="<?php echo $teacher -> teacher_first_name ?>" required>

                                            </div>

                                            <div class="col-md">

                                                <label for="last-name">Last Name</label>

                                                <input type="text" class="form-control" name="teacher_last_name" id="last-name" maxlength="50" value="<?php echo $teacher -> teacher_last_name ?>" required>

                                            </div>
                                            
                                        </div>

                                        <div class="row">

                                            <div class="col-md">

                                                <label for="birthdate">BirthDate</label>

                                                <input type="date" class="form-control" name="teacher_birth_date" id="birthdate" value="<?php echo $teacher -> teacher_birth_date ?>">

                                            </div>

                                            <div class="col-md">

                                                <label for="birthplace">BirthPlace</label>

                                                <input type="text" class="form-control" name="teacher_birth_place" id="birthplace" maxlength="255" value="<?php echo $teacher -> teacher_birth_place ?>">

                                            </div>

                                        </div>


                                        <div class="mx-auto">

                                            <label for="gender">Teacher Gender <span style="color: #ff0000;"> *</span></label>

                                            <select class="form-control" name="teacher_gender" id="gender" required>

                                                <option selected disabled>Select Gender</option>

                                                    <option value="Laki-Laki" <?php echo ($teacher -> teacher_gender == 'Laki-Laki') ? 'selected' : '' ?>>Laki-Laki</option>
                                                    <option value="Perempuan" <?php echo ($teacher -> teacher_gender == 'Perempuan') ? 'selected' : '' ?>>Perempuan</option>

                                            </select>
                                                        
                                        </div>

                                        <div class="row">

                                            <div class="col-md">

                                                <label for="address">Address</label>
                                                
                                                <input type="text" class="form-control" name="teacher_address" id="address" maxlength="225" value="<?php echo $teacher -> teacher_address ?>">

                                            </div>

                                            <div class="form-group col-md">

                                                <label for="phone-number">Phone Number</label>

                                                <div class="input-group">

                                                    <span class="input-group-text">+62</span>
                                                   
                                                    <input type="tel" class="form-control" name="teacher_phone_number" id="phone-number" placeholder="8XX-XXXX-XXXX" pattern="8[0-9]{2}-[0-9]{4}-[0-9]{4,5}" maxlength="15" value="<?php echo substr($teacher -> teacher_phone_number, 4) ?>">

                                                </div>

                                            </div>
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