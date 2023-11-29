<?php

namespace App\Models;

use App\Core\Model;

class Login extends Model
{
     public function proses()
     {
          // $user_email = $_POST['user_email'];
          // $user_password = $_POST['user_password'];

          // Memeriksa apakah 'user_email' sudah diatur dalam $_POST
          if (isset($_POST['user_email'])) {
               $user_email = $_POST['user_email'];
          } else {
               // Atau berikan nilai default atau tindakan yang sesuai
               $user_email = null; // atau $user_email = ''; tergantung kebutuhan Anda
               // atau Anda bisa menampilkan pesan kesalahan atau mengarahkan pengguna ke halaman lain
               // sesuai kebijakan aplikasi Anda
          }

          // Memeriksa apakah 'user_password' sudah diatur dalam $_POST
          if (isset($_POST['user_password'])) {
               $user_password = $_POST['user_password'];
          } else {
               // Atau berikan nilai default atau tindakan yang sesuai
               $user_password = null; // atau $user_password = ''; tergantung kebutuhan Anda
               // atau Anda bisa menampilkan pesan kesalahan atau mengarahkan pengguna ke halaman lain
               // sesuai kebijakan aplikasi Anda
          }

          $query = "SELECT * FROM tb_users WHERE user_email=:user_email AND user_password=PASSWORD(:user_password)";
          $stmt = $this->db->prepare($query);
          $stmt->bindParam(":user_email", $user_email);
          $stmt->bindParam(":user_password", $user_password);
          $stmt->execute();

          return $stmt->fetch();
     }
}