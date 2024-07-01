public function login() {

    $authentication_username = $this -> request -> getPost('authentication_username'); // ubah 'string' menjadi value yang ada pada attribute name pada file login.
    $authentication_password = $this -> request -> getPost('authentication_password'); // ubah 'string' menjadi value yang ada pada attribute name pada file login.

    // ...

        $_models = new information(); // ubah new information(); sama Model kalian

        $_userData = array('username' => $authentication_username, 'password' => md5($authentication_password));
        $_where = $_models -> getWhere2('authentication_user', $_userData); // ubah 'authentication_user' dengan database table kalian

    // Creating session

        if ($_where > 0) {

            session() -> set('username', $_where['username']);
            session() -> set('ranks', $_where['ranks']); // ubah sesuai dengan yang ada di database.
            session() -> set('id', $_where['_idUser']); // ubah sesuai dengan yang ada di database.

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