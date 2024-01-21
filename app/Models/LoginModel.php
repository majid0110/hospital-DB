<?php
namespace App\Models;

use CodeIgniter\Model;


class LoginModel extends Model
{
    protected $table = "users"; 

   protected $allowedFields = ['fName', 'lName', 'email', 'Password']; 
    

    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }

    public function saveDoctorProfile($data)
    {
        $this->db->table('doctorprofile')->insert($data);
    }
}

