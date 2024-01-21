<?php
namespace App\Models;

use CodeIgniter\Model;


class DoctorModel extends Model
{

    protected $table = "doctorprofile"; 
    protected $allowedFields = ['FirstName', 'LastName', 'Gender', 'DateOfBirth', 'ContactNumber', 'Email', 'Specialization', 'MedicalLicenseNumber', 'ClinicAddress', 'HospitalAffiliation', 'Education', 'ExperienceYears', 'Certification', 'ProfileImageURL', 'BusinessID'];

    public function saveDoctorProfile($data)
    {
        $this->db->table('doctorprofile')->insert($data);
    }

    public function getSpecializations()
    {
        return $this->db->table('specialization')->get()->getResultArray();
    }


    public function getdoctorprofile()
{
    return $this->db->table('doctorprofile')
        ->join('specialization', 'specialization.s_id = doctorprofile.Specialization')
        ->get()
        ->getResultArray();
}
public function deleteDoctor($doctorID)
    {
        // Delete the doctor record based on the given doctorID
        $this->db->table('doctorprofile')->where('DoctorID', $doctorID)->delete();
    }


    public function getDoctorByID($doctorID)
    {
        // Fetch and return the doctor details based on the given doctorID
        return $this->db->table('doctorprofile')->where('DoctorID', $doctorID)->get()->getRowArray();
    }

    public function updateDoctor($doctorID, $data)
    {
        // Update the doctor details based on the given doctorID
        $this->db->table('doctorprofile')->where('DoctorID', $doctorID)->update($data);
    }

    public function getDoctorNames()
    {
        $query = $this->select('DoctorID, FirstName, LastName')->findAll();
        return $query;
    }

    public function getFeeTypes()
    {
        // Assuming you have a 'fee_type' table in your database
        $query = $this->db->table('fee_type')
            ->select('f_id, FeeType, Description')
            ->get()
            ->getResult();

        return $query;
    }

    public function insertDoctorFee($data)
    {
        $this->db->table('doctor_fee')->insert($data);
    }
}

