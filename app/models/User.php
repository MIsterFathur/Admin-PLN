<?php

namespace App\Models;

use App\Core\Model;

class User extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_users";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            // $user_id = $_POST['user_id'];
            $user_email = $_POST['user_email'];
            $user_password = $_POST['user_password'];
            $user_nama = $_POST['user_nama'];
            $user_alamat = $_POST['user_alamat'];
            $user_hp = $_POST['user_hp'];
            $user_pos = $_POST['user_pos'];
            $user_role = $_POST['user_role'];
            $created_at = date('Y-m-d H:i:s');

            $sql = "INSERT INTO tb_users
            SET user_email=:user_email, user_password=PASSWORD(:user_password), user_nama=:user_nama, user_alamat=:user_alamat, user_hp=:user_hp, user_pos=:user_pos, user_role=:user_role, created_at=:created_at";
            $stmt = $this->db->prepare($sql);

            // $stmt->bindParam(":user_id", $user_id);
            $stmt->bindParam(":user_email", $user_email);
            $stmt->bindParam(":user_password", $user_password);
            $stmt->bindParam(":user_nama", $user_nama);
            $stmt->bindParam(":user_alamat", $user_alamat);
            $stmt->bindParam(":user_hp", $user_hp);
            $stmt->bindParam(":user_pos", $user_pos);
            $stmt->bindParam(":user_role", $user_role);
            $stmt->bindParam(":created_at", $created_at);
            // $stmt->bindParam(":created_at", $created_at);

            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM tb_users WHERE user_id=:user_id";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":user_id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
          //  $user_id = $_POST['user_id'];
            $user_email = $_POST['user_email'];
            $user_password = $_POST['user_password'];
            $user_nama = $_POST['user_nama'];
            $user_alamat = $_POST['user_alamat'];
            $updated_at =  date('Y-m-d H:i:s');
            $id = $_POST['id'];
            if (!empty($user_password)) {
                  $sql = "UPDATE tb_users
                  SET user_email=:user_email, user_password=PASSWORD(:user_password), user_nama=:user_nama, user_alamat=:user_alamat, updated_at=:updated_at
                  WHERE user_id=:user_id";
            } else {
                  $sql = "UPDATE tb_users
                  SET user_email=:user_email, user_nama=:user_nama, user_alamat=:user_alamat
                  WHERE user_id=:user_id";
            }

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":user_email", $user_email);
            $stmt->bindParam(":user_password", $user_password);
            $stmt->bindParam(":user_nama", $user_nama);
            $stmt->bindParam(":user_alamat", $user_alamat);
            $stmt->bindParam(":updated_at", $updated_at);  //ingatttttttttttttt
            $stmt->bindParam(":user_id", $id);

            $stmt->execute();
      }

      public function delete($id)
      {
            $sql = "DELETE FROM tb_users WHERE user_id=:user_id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":user_id", $id);
            $stmt->execute();
      }
}