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

                                <li class="breadcrumb-item active">edit_student</li>

                            </ol>

                        </div>

                </div>

            </div>

        </div>

    <!-- Content -->

        <section class="content">

            <div class="container">

                <form action="<?= base_url('/home/action_edit_studentData') ?>" method="post" autocomplete="off">
            

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

                                            <input type="hidden" name="id" value="<?php echo $user -> _idUser ?>">

                                        <div class="card-body">

                                            <!-- User forms input -->

                                                <div class="col-md">

                                                    <label for="username">Username <span style="color: #ff0000;"> *</span></label>

                                                    <input type="text" class="form-control" name="authentication_username" id="username" maxlength="20" value="<?php echo $user -> username ?>" required autofocus <?php if (in_array(session() -> get('ranks'), [2])) { echo 'readonly style="color: #a9a9a9"'; } ?>>

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

                                        <h3 class="card-title font-weight-bold">Student </h3>

                                    </div>

                                        <input type="hidden" name="id2" value="<?php echo $student -> _studentUser ?>">

                                    <div class="card-body">
                                        
                                        <div class="mx-auto">

                                            <label for="nis">NIS <span style="color: #ff0000;"> *</span></label>

                                            <input type="number" class="form-control" name="student_nis" id="nis" maxlength="18" value="<?php echo $student -> student_NIS ?>" required <?php if (in_array(session() -> get('ranks'), [2])) { echo 'readonly style="color: #a9a9a9"'; } ?>>

                                        </div>

                                        <div class="row">

                                            <div class="col-md">

                                                <label for="first-name">First Name <span style="color: #ff0000;"> *</span></label>

                                                <input type="text" class="form-control" name="student_first_name" id="first-name" maxlength="50" value="<?php echo $student -> student_first_name ?>" required <?php if (in_array(session() -> get('ranks'), [2])) { echo 'readonly style="color: #a9a9a9"'; } ?>>

                                            </div>

                                            <div class="col-md">

                                                <label for="last-name">Last Name</label>

                                                <input type="text" class="form-control" name="student_last_name" id="last-name" maxlength="50" value="<?php echo $student -> student_last_name ?>" <?php if (in_array(session() -> get('ranks'), [2])) { echo 'readonly style="color: #a9a9a9"'; } ?>>

                                            </div>
                                            
                                        </div>

                                        <div class="row">

                                            <div class="col-md">

                                                <label for="birthdate">BirthDate</label>

                                                <input type="date" class="form-control" name="student_birth_date" id="birthdate" value="<?php echo $student -> student_birth_date ?>" <?php if (in_array(session() -> get('ranks'), [2])) { echo 'readonly style="color: #a9a9a9"'; } ?>>

                                            </div>

                                            <div class="col-md">

                                                <label for="birthplace">BirthPlace</label>

                                                <input type="text" class="form-control" name="student_birth_place" id="birthplace" maxlength="255" value="<?php echo $student -> student_birth_place ?>" <?php if (in_array(session() -> get('ranks'), [2])) { echo 'readonly style="color: #a9a9a9"'; } ?>>

                                            </div>

                                        </div>


                                        <div class="mx-auto">

                                            <label for="gender">Gender <span style="color: #ff0000;"> *</span></label>

                                            <select class="form-control" name="student_gender" id="gender" required <?php if (in_array(session() -> get('ranks'), [2])) { echo 'readonly style="color: #a9a9a9"'; } ?>>

                                                <option selected disabled>Select Gender</option>

                                                    <option value="Laki-Laki" <?php echo ($student -> student_gender == 'Laki-Laki') ? 'selected' : '' ?>>Laki-Laki</option>
                                                    <option value="Perempuan" <?php echo ($student -> student_gender == 'Perempuan') ? 'selected' : '' ?>>Perempuan</option>

                                            </select>
                                                        
                                        </div>

                                        <div class="row">

                                            <div class="col-md">

                                                <label for="address">Address</label>
                                                
                                                <input type="text" class="form-control" name="student_address" id="address" maxlength="225" value="<?php echo $student -> student_address ?>" <?php if (in_array(session() -> get('ranks'), [2])) { echo 'readonly style="color: #a9a9a9"'; } ?>>

                                            </div>

                                            <div class="form-group col-md">

                                                <label for="phone-number">Phone Number</label>

                                                <div class="input-group">

                                                    <span class="input-group-text">+62</span>
                                                   
                                                    <input type="tel" class="form-control" name="student_phone_number" id="phone-number" placeholder="8XX-XXXX-XXXX" pattern="8[0-9]{2}-[0-9]{4}-[0-9]{4,5}" maxlength="15" value="<?php echo substr($student -> student_phone_number, 4) ?>" <?php if (in_array(session() -> get('ranks'), [2])) { echo 'readonly style="color: #a9a9a9"'; } ?>>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="mx-auto">

                                            <label for="class">Class <span style="color: #ff0000;"> *</span></label>

                                            <select class="form-control" name="student_class" id="class" required <?php if (in_array(session() -> get('ranks'), [2])) { echo 'readonly style="color: #a9a9a9"'; } ?>>

                                            <option selected disabled>Select Class</option>

                                                <option value="RPL XI A" <?php echo ($student -> student_class == 'RPL XI A') ? 'selected' : '' ?>>RPL XI A</option>
                                                <option value="RPL XI B" <?php echo ($student -> student_class == 'RPL XI B') ? 'selected' : '' ?>>RPL XI B</option>
                                                <option value="RPL XI C" <?php echo ($student -> student_class == 'RPL XI C') ? 'selected' : '' ?>>RPL XI C</option>
                                                <option value="AKL XI" <?php echo ($student -> student_class == 'AKL XI') ? 'selected' : '' ?>>AKL XI</option>
                                                <option value="BDP XI" <?php echo ($student -> student_class == 'BDP XI') ? 'selected' : '' ?>>BDP XI</option>

                                            </select>

                                        </div>

                                        <div class="form-group mx-auto">

                                            <label for="guidance_teacher">Guidance Teacher</label>

                                            <div class="input-group-append">

                                                <span class="input-group-text"><i class="fas fa-person-chalkboard"></i></span>
                                                <select class="form-control" name="student_guidance_teacher" id="guidance_teacher" required>

                                                <option selected disabled>Select Guidance Teacher</option>

                                                    <?php

                                                        foreach ($teacher as $_data) {

                                                            if (in_array($_data -> ranks, [3, 4])) {

                                                    ?>

                                                        <option value="<?php echo $_data -> _teacherUser ?>" <?php echo ($student -> student_guidance_teacher == $_data -> _teacherUser) ? 'selected' : '' ?>>

                                                            <?php echo ucwords($_data -> teacher_first_name) . ' ' . ucwords($_data -> teacher_last_name) ?>

                                                        </option>

                                                    <?php

                                                            }

                                                        }

                                                    ?>

                                                </select>

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