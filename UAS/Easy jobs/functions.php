<?php 
    $conn = mysqli_connect("sql200.epizy.com", "epiz_30827203", "Ownjpmc4bMi7L", "epiz_30827203_phpdasar");

    function registrasi($data){
        global $conn;
        $username = strtolower(stripslashes($data["username"]));
        $email = strtolower(stripslashes($data["email"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);

        // cek username
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
        if(mysqli_fetch_assoc($result)) {
            echo "<script>
                    alert('Username sudah terdaftar!');
                  </script>
                ";

                return false;
        }

        //enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        //tambahkan user baru ke database
        mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$email', '$password')");

        return mysqli_affected_rows($conn);
    }
?>