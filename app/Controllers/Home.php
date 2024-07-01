<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\information;

class Home extends BaseController {

    // =================================================== [ System Default ] ================================================== //

        public function index() {

            return view('login');

        }

        public function dashboard() {

            if (session() -> get('id') > 0) {

                echo view('layout/_header');
                echo view('layout/_menu');

                echo view('pages/dashboard');
                echo view('layout/_footer');

            } else {

                // Redirect user into login pages

                    return redirect() -> to('/home/');

            }

        }

    // =================================================== [ Login Function ] ================================================== //

        public function login() {

            $authentication_username = $this -> request -> getPost('authentication_username');
            $authentication_password = $this -> request -> getPost('authentication_password');

            // ...

                $_models = new information();

                $_userData = array('username' => $authentication_username, 'password' => md5($authentication_password));
                $_where = $_models -> getWhere2('authentication_user', $_userData);

            // Creating session

                if ($_where > 0) {

                    session() -> set('username', $_where['username']);
                    session() -> set('ranks', $_where['ranks']);
                    session() -> set('id', $_where['_idUser']);

                        // Redirect user into dashboard pages

                            return redirect() -> to('/home/dashboard');

                } else {

                    // Redirect user into login pages

                        return redirect() -> to(base_url('/home/'));

                };

        }

        public function logOut() {

            session() -> destroy(); // Destroy session that exist

                // Redirect user into login pages

                    return redirect() -> to('/home/login');

        }

    // =================================================== [ Account Function & System ] ================================================== //

        public function account() {

            if (in_array(session() -> get('ranks'), [1])) {

                // ...

                    $_models = new information();

                // Fetching data from 2 tables

                    $on = 'authentication_user.ranks = authentication_ranks._idRanks';
                    $_fetch['account'] = $_models -> visual_join2('authentication_user', 'authentication_ranks', $on);

                // ...

                    echo view('layout/_header');
                    echo view('layout/_menu');

                    echo view('pages/account', $_fetch);
                    echo view('layout/_footer');

            } else {

                // Redirect user into dashboard pages

                    return redirect() -> to('/home/dashboard');

            }

        }

        public function account_password_reset($_id) {

            if (in_array(session() -> get('ranks'), [1]) || session() -> get('id') > 0) {

                // ...

                    $_models = new information();

                    $_userData = array('_idUser' => $_id);
                    $_newPassword = array('password' => md5('kitsupasswordnew'));

                // ...

                    $_models -> edit_data('authentication_user', $_newPassword, $_userData);

                // Redirect user into account pages

                    return redirect() -> to('/home/account');

            } else {

                // Redirect user into dashboard pages

                    return redirect() -> to('/home/dashboard');

            }

        }

    // =================================================== [ Teacher Function & System ] ================================================== //

        public function teacher() {

            if (in_array(session() -> get('ranks'), [1, 2, 3, 4])) {

                // ...

                    $_models = new information();

                    $_fetch['teacher'] = $_models -> visual('teacher');

                // ...

                    echo view('layout/_header');
                    echo view('layout/_menu');

                    echo view('pages/teacher/_teacherData', $_fetch);
                    echo view('layout/_footer');

            } else {

                // Redirect user into dashboard pages

                    return redirect() -> to('/home/dashboard');

            }

        }

        // [ Create, Update, Delete ] System

            public function add_teacherData() {

                if (in_array(session() -> get('ranks'), [1])) {

                    // ...

                        $_models = new information();

                        $_fetch['teacherData'] = $_models -> visual('authentication_ranks');

                    // ...

                        echo view('layout/_header');
                        echo view('layout/_menu');

                        echo view('pages/teacher/add_teacherData', $_fetch);
                        echo view('layout/_footer');

                } else {

                    // Redirect user into teacher pages

                        return redirect() -> to('/home/teacher');

                }

            }

            public function edit_teacherData($_id) {

                if (in_array(session() -> get('ranks'), [1])) {

                    // ...

                        $_models = new information();

                        $_dataTeacher = array('_teacherUser' => $_id);
                        $_dataUser = array('_idUser' => $_id);

                        $_fetch['ranks'] = $_models -> visual('authentication_ranks');
                        $_fetch['teacher'] = $_models -> getWhere('teacher' ,$_dataTeacher);
                        $_fetch['user'] = $_models -> getWhere('authentication_user', $_dataUser);

                    // ...

                        echo view('layout/_header');
                        echo view('layout/_menu');

                        echo view('pages/teacher/edit_teacherData', $_fetch);
                        echo view('layout/_footer');

                } else {

                    // Redirect user into teacher pages

                        return redirect() -> to('/home/teacher');

                }

            }

            public function delete_teacherData($_id) {

                // ...

                    $_models = new information();

                    $_dataTeacher = array('_teacherUser' => $_id);
                    $_dataUser = array('_idUser' => $_id);

                // Filter permission by session for deleting data

                    if (in_array(session() -> get('ranks'), [1])) {

                        $_models -> delete_data('teacher', $_dataTeacher);
                        $_models -> delete_data('authentication_user', $_dataUser);
    
                    }

                // Redirect user into teacher pages

                    return redirect() -> to('/home/teacher');

            }

        // [ Create, Update ] System Action

            public function action_add_teacherData() {

                $authentication_username = $this -> request -> getPost('authentication_username');
                $authentication_password = $this -> request -> getPost('authentication_password');
                $authentication_ranks = $this -> request -> getPost('authentication_ranks');

                $teacher_NIK = $this -> request -> getPost('teacher_nik');
                $teacher_firstName = $this -> request -> getPost('teacher_first_name');
                $teacher_lastName = $this -> request -> getPost('teacher_last_name');
                $teacher_birthDate = $this -> request -> getPost('teacher_birth_date');
                $teacher_birthPlace = $this -> request -> getPost('teacher_birth_place');
                $teacher_gender = $this -> request -> getPost('teacher_gender');
                $teacher_phoneNumber = $this -> request -> getPost('teacher_phone_number');
                $teacher_address = $this -> request -> getPost('teacher_address');

                // ...

                    $_models = new information();

                    $_dataUser = array('username' => $authentication_username, 'password' => md5($authentication_password), 'ranks' => $authentication_ranks);

                // Filter permission by session for adding user data

                    if (in_array(session() -> get('ranks'), [1])) {

                        $_models -> add_data('authentication_user', $_dataUser);

                    }

                // ...

                    $_data = array('username' => $authentication_username);
                    $_where = $_models -> getWhere2('authentication_user', $_data);

                    $_id = $_where['_idUser'];

                    $_dataTeacher = array(

                        'teacher_NIK' => $teacher_NIK,
                        'teacher_first_name' => $teacher_firstName,
                        'teacher_last_name' => $teacher_lastName,
                        'teacher_birth_date' => $teacher_birthDate,
                        'teacher_birth_place' => $teacher_birthPlace,
                        'teacher_gender' => $teacher_gender,
                        'teacher_phone_number' => '+62 ' . $teacher_phoneNumber,
                        'teacher_address' => $teacher_address,
                        '_teacherCreatedAt' => date('Y-m-d H:i:s', strtotime('now')),
                        '_teacherUser' => $_id,

                    );

                // Filter permission by session for adding user data
                
                    if (in_array(session() -> get('ranks'), [1])) {

                        $_models -> add_data('teacher', $_dataTeacher);

                    }

                // Redirect user into teacher pages

                    return redirect() -> to('/home/teacher');

            }

            public function action_edit_teacherData() {

                $authentication_username = $this -> request -> getPost('authentication_username');
                $authentication_ranks = $this -> request -> getPost('authentication_ranks');
                $_id = $this -> request -> getPost('id');

                $teacher_NIK = $this -> request -> getPost('teacher_nik');
                $teacher_firstName = $this -> request -> getPost('teacher_first_name');
                $teacher_lastName = $this -> request -> getPost('teacher_last_name');
                $teacher_birthDate = $this -> request -> getPost('teacher_birth_date');
                $teacher_birthPlace = $this -> request -> getPost('teacher_birth_place');
                $teacher_gender = $this -> request -> getPost('teacher_gender');
                $teacher_phoneNumber = $this -> request -> getPost('teacher_phone_number');
                $teacher_address = $this -> request -> getPost('teacher_address');
                $_id2 = $this -> request -> getPost('id2');

                // ...

                    $_models = new information();

                    $_where = array('_idUser' => $_id);
                    $_dataUser = array('username' => $authentication_username, 'ranks' => $authentication_ranks);

                // Filter permission by session for adding user data

                    if (in_array(session() -> get('ranks'), [1])) {

                        $_models -> edit_data('authentication_user', $_dataUser, $_where);

                    }

                // ...

                    $_where2 = array('_teacherUser' => $_id2);

                    $_dataTeacher = array(

                        'teacher_NIK' => $teacher_NIK,
                        'teacher_first_name' => $teacher_firstName,
                        'teacher_last_name' => $teacher_lastName,
                        'teacher_birth_date' => $teacher_birthDate,
                        'teacher_birth_place' => $teacher_birthPlace,
                        'teacher_gender' => $teacher_gender,
                        'teacher_phone_number' => '+62 ' . $teacher_phoneNumber,
                        'teacher_address' => $teacher_address,
                        '_teacherUpdatedAt' => date('Y-m-d H:i:s', strtotime('now')),

                    );

                // Filter permission by session for adding user data
                
                    if (in_array(session() -> get('ranks'), [1])) {

                        $_models -> edit_data('teacher', $_dataTeacher, $_where2);

                    }

                // Redirect user into teacher pages

                    return redirect() -> to('/home/teacher');

            }

    // =================================================== [ Student Function & System ] ================================================== //

        public function student() {

            // ...

                $_models = new information();

            // Fetching data from 2 tables
            
                $on = 'student.student_guidance_teacher = teacher._teacherUser';
                $_fetch['student'] = $_models -> visual_join2('student', 'teacher', $on);

            // ...

                echo view('layout/_header');
                echo view('layout/_menu');

                echo view('pages/student/_studentData', $_fetch);
                echo view('layout/_footer');

        }

        // [ Create, Update, Delete ] System

            public function add_studentData() {

                if (in_array(session() -> get('ranks'), [1])) {

                    // ...

                        $_models = new information();

                    // Fetching data from 2 tables

                        $on = 'teacher._teacherUser = authentication_user._idUser';
                        $_fetch['student'] = $_models -> visual_join2('teacher', 'authentication_user', $on);

                    // ...

                        echo view('layout/_header');
                        echo view('layout/_menu');
        
                        echo view('pages/student/add_studentData', $_fetch);
                        echo view('layout/_footer');

                } else {

                    // Redirect user into student pages

                        return redirect() -> to('/home/student');

                }
                
            }

            public function edit_studentData($_id) {

                if (in_array(session() -> get('ranks'), [1, 2])) {

                    // ...

                        $_models = new information();

                        $_dataStudent = array('_studentUser' => $_id);
                        $_dataUser = array('_idUser' => $_id);

                        $on = 'teacher._teacherUser = authentication_user._idUser';
                        $_fetch['teacher'] = $_models -> visual_join2('teacher', 'authentication_user', $on);
                        $_fetch['student'] = $_models -> getWhere('student' ,$_dataStudent);
                        $_fetch['user'] = $_models -> getWhere('authentication_user', $_dataUser);

                    // ...

                        echo view('layout/_header');
                        echo view('layout/_menu');

                        echo view('pages/student/edit_studentData', $_fetch);
                        echo view('layout/_footer');

                } else {

                    // Redirect user into student pages

                        return redirect() -> to('/home/student');

                }

            }

            public function delete_studentData($_id) {

                // ...

                    $_models = new information();

                    $_dataStudent = array('_studentUser' => $_id);
                    $_dataUser = array('_idUser' => $_id);

                // Filter permission by session for deleting data

                    if (in_array(session() -> get('ranks'), [1])) {

                        $_models -> delete_data('student', $_dataStudent);
                        $_models -> delete_data('authentication_user', $_dataUser);
    
                    }

                // Redirect user into student pages

                    return redirect() -> to('/home/student');

            }

        // [ Create, Update ] System Action

            public function action_add_studentData() {

                $authentication_username = $this -> request -> getPost('authentication_username');
                $authentication_password = $this -> request -> getPost('authentication_password');

                $student_NIS = $this -> request -> getPost('student_nis');
                $student_firstName = $this -> request -> getPost('student_first_name');
                $student_lastName = $this -> request -> getPost('student_last_name');
                $student_birthDate = $this -> request -> getPost('student_birth_date');
                $student_birthPlace = $this -> request -> getPost('student_birth_place');
                $student_gender = $this -> request -> getPost('student_gender');
                $student_phoneNumber = $this -> request -> getPost('student_phone_number');
                $student_address = $this -> request -> getPost('student_address');
                $student_class = $this -> request -> getPost('student_class');

                // ...

                    $_models = new information();

                    $_dataUser = array('username' => $authentication_username, 'password' => md5($authentication_password), 'ranks' => '5');

                // Filter permission by session for adding user data

                    if (in_array(session() -> get('ranks'), [1])) {

                        $_models -> add_data('authentication_user', $_dataUser);

                    }

                // ...

                    $_data = array('username' => $authentication_username);
                    $_where = $_models -> getWhere2('authentication_user', $_data);

                    $_id = $_where['_idUser'];

                    $_dataStudent = array(

                        'student_NIS' => $student_NIS,
                        'student_first_name' => $student_firstName,
                        'student_last_name' => $student_lastName,
                        'student_birth_date' => $student_birthDate,
                        'student_birth_place' => $student_birthPlace,
                        'student_gender' => $student_gender,
                        'student_phone_number' => '+62 ' . $student_phoneNumber,
                        'student_address' => $student_address,
                        'student_class' => $student_class,
                        '_studentCreatedAt' => date('Y-m-d H:i:s', strtotime('now')),
                        '_studentUser' => $_id,

                    );

                // Filter permission by session for adding user data
                
                    if (in_array(session() -> get('ranks'), [1])) {

                        $_models -> add_data('student', $_dataStudent);

                    }

                // Redirect user into student pages

                    return redirect() -> to('/home/student');

            }

            public function action_edit_studentData() {

                $authentication_username = $this -> request -> getPost('authentication_username');
                $_id = $this -> request -> getPost('id');

                $student_NIS = $this -> request -> getPost('student_nis');
                $student_firstName = $this -> request -> getPost('student_first_name');
                $student_lastName = $this -> request -> getPost('student_last_name');
                $student_birthDate = $this -> request -> getPost('student_birth_date');
                $student_birthPlace = $this -> request -> getPost('student_birth_place');
                $student_gender = $this -> request -> getPost('student_gender');
                $student_phoneNumber = $this -> request -> getPost('student_phone_number');
                $student_address = $this -> request -> getPost('student_address');
                $student_class = $this -> request -> getPost('student_class');
                $student_guidance_teacher = $this -> request -> getPost('student_guidance_teacher');
                $_id2 = $this -> request -> getPost('id2');

                // ...

                    $_models = new information();

                    $_where = array('_idUser' => $_id);
                    $_dataUser = array('username' => $authentication_username);

                // Filter permission by session for adding user data

                    if (in_array(session() -> get('ranks'), [1])) {

                        $_models -> edit_data('authentication_user', $_dataUser, $_where);

                    }

                // ...

                    $_where2 = array('_studentUser' => $_id2);

                    $_dataStudent = array(

                        'student_NIS' => $student_NIS,
                        'student_first_name' => $student_firstName,
                        'student_last_name' => $student_lastName,
                        'student_birth_date' => $student_birthDate,
                        'student_birth_place' => $student_birthPlace,
                        'student_gender' => $student_gender,
                        'student_phone_number' => '+62 ' . $student_phoneNumber,
                        'student_address' => $student_address,
                        'student_class' => $student_class,
                        'student_guidance_teacher' => $student_guidance_teacher,
                        '_studentUpdatedAt' => date('Y-m-d H:i:s', strtotime('now')),

                    );

                // Filter permission by session for adding user data
                
                    if (in_array(session() -> get('ranks'), [1, 2])) {

                        $_models -> edit_data('student', $_dataStudent, $_where2);

                    }

                // Redirect user into student pages

                    return redirect() -> to('/home/student');

            }

    // =================================================== [ Report Cards Function & System ] ================================================== //

        public function report_cards() {

            // ...

                $_models = new information();

            // Fetching data from 2 tables
            
                $on = 'report_card._cardUser = student._studentUser';

                $_fetch['reports'] = $_models -> visual_join2('student', 'report_card', $on);

            // ...

                echo view('layout/_header');
                echo view('layout/_menu');

                echo view('pages/card/_reportCards', $_fetch);
                echo view('layout/_footer');

        }

        // [ Create, Update, Delete ] System

            public function add_reportCardsData() {

                // ...

                    $_models = new information();

                    $_fetch['reports'] = $_models -> visual('report_card');

                // ...

                    echo view('layout/_header');
                    echo view('layout/_menu');
        
                    echo view('pages/card/add_reportcardsData', $_fetch);
                    echo view('layout/_footer');

            }

            public function report_cards_status($_id) {

                if (in_array(session() -> get('ranks'), [1, 2, 3, 4]) || session() -> get('id') > 0) {

                    // ...

                        $_models = new information();

                        $_reportcardsData = array('_idCard' => $_id);
                        $_newStatus = array('_cardStatus' => 'disetujui', '_cardUpdatedAt' => date('Y-m-d H:i:s', strtotime('now')));

                    // ...

                        $_models -> edit_data('report_card', $_newStatus, $_reportcardsData);

                    // Redirect user report cards pages

                        return redirect() -> to('/home/report_cards');


                } else {

                    // Redirect user into report cards pages

                        return redirect() -> to('/home/report_cards');

                }

            }

        // [ Create, Update ] System Action

            public function action_add_reportCardsData() {

                $report_card1_row_1 = $this -> request -> getPost('guidance1_row_1');
                $report_card1_row_2 = $this -> request -> getPost('guidance1_row_2');
                $report_card1_row_3 = $this -> request -> getPost('guidance1_row_3');
                $report_card1_row_4 = $this -> request -> getPost('guidance1_row_4');
                $report_card1_row_5 = $this -> request -> getPost('guidance1_row_5');

                $report_card2_row_1 = $this -> request -> getPost('guidance2_row_1');
                $report_card2_row_2 = $this -> request -> getPost('guidance2_row_2');
                $report_card2_row_3 = $this -> request -> getPost('guidance2_row_3');
                $report_card2_row_4 = $this -> request -> getPost('guidance2_row_4');
                $report_card2_row_5 = $this -> request -> getPost('guidance2_row_5');

                // ...

                    $_models = new information();

                // ...


                    $_dataCards = array(

                        'student_report_guidance_date' => date('Y-m-d'),
                        'guidance1_row1' => $report_card1_row_1,
                        'guidance1_row2' => $report_card1_row_2,
                        'guidance1_row3' => $report_card1_row_3,
                        'guidance1_row4' => $report_card1_row_4,
                        'guidance1_row5' => $report_card1_row_5,
                        'guidance2_row1' => $report_card2_row_1,
                        'guidance2_row2' => $report_card2_row_2,
                        'guidance2_row3' => $report_card2_row_3,
                        'guidance2_row4' => $report_card2_row_4,
                        'guidance2_row5' => $report_card2_row_5,
                        '_cardStatus' => 'belum disetujui',
                        '_cardUser' => session() -> get('id'),
                        '_cardCreatedAt' => date('Y-m-d H:i:s', strtotime('now')),

                    );

                // Filter permission by session for adding user data
                
                    if (in_array(session() -> get('ranks'), [1, 5])) {

                        $_models -> add_data('report_card', $_dataCards);

                    }

                // Redirect user into student pages

                    return redirect() -> to('/home/report_cards');
            }

    // =================================================== [ Report Cards History Function & System ] ================================================== //

        public function report_cards_history() {

            // ...

                $_models = new information();

            // Fetching data from 2 tables
            
                $on = 'report_card._cardUser = student._studentUser';
                $_fetch['reports'] = $_models -> visual_join2('report_card', 'student', $on);

            // ...

                echo view('layout/_header');
                echo view('layout/_menu');

                echo view('pages/card/_reportCardsHistory', $_fetch);
                echo view('layout/_footer');

        }
    
}