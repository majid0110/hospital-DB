<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\DoctorModel;



class DoctorController extends Controller
{

    public function doctors_form()
    {
        $Model = new DoctorModel();
        $data['specializations'] = $Model->getSpecializations();

        return view('doctors_form.php', $data);
    }

    public function editDoctor($doctorID)
    {
        $model = new DoctorModel();
        $data['specializations'] = $model->getSpecializations();
        $data['doctorDetails'] = $model->getDoctorByID($doctorID);
        return view('edit_doctor.php', $data);
    }
    
    public function deleteDoctor($doctorID)
    {
        $model = new DoctorModel();
        $model->deleteDoctor($doctorID);

        return redirect()->to(base_url("/doctors_table.php"));
    }

    public function doctors_table()
    {
        $Model = new DoctorModel();
        $data['doctorDetails'] = $Model->getdoctorprofile(); 
        return view('doctors_table.php', $data);
    }

    public function doctors_fee()
    {
        $model = new DoctorModel();
        $data['doctor_names'] = $model->getDoctorNames();
        $data['fee_types'] = $model->getFeeTypes();
        return view('doctors_fee.php', $data);

    }
    

    public function saveDoctorProfile()
    {
        $request = \Config\Services::request();
        var_dump($_FILES);
        $profileImage = $request->getFile('profile');
        $ProfileImageName = $profileImage->getName();
        $profileImage->move(FCPATH . 'login_ci4/uploads/', $ProfileImageName);
        
        $data = [
            'FirstName' => $request->getPost('fName'),
            'LastName' => $request->getPost('lName'),
            'Gender' => $request->getPost('gender'),
            'DateOfBirth' => $request->getPost('dob'),
            'ContactNumber' => $request->getPost('phone'),
            'Email' => $request->getPost('email'),
            'Specialization' => $request->getPost('specialization'), 
            'MedicalLicenseNumber' => $request->getPost('MLN'),
            'ClinicAddress' => $request->getPost('address'),
            'HospitalAffiliation' => $request->getPost('hos_af'),
            'Education' => $request->getPost('education'),
            'ExperienceYears' => $request->getPost('experience'),
            'Certification' => $request->getPost('certificate'),
           // 'ProfileImageURL' => $request->getPost('profile'),
            'ProfileImageURL' => $ProfileImageName,
            'BusinessID' => $request->getPost('bid'),
        ];



        $Model = new DoctorModel();
        $Model->saveDoctorProfile($data);

        return redirect()->to(base_url("/user_form"));
    }

    

    public function updateDoctor()
    {
        $request = \Config\Services::request();

        $data = [
            'FirstName' => $request->getPost('fName'),
            'LastName' => $request->getPost('lName'),
            'Gender' => $request->getPost('gender'),
            'DateOfBirth' => $request->getPost('dob'),
            'ContactNumber' => $request->getPost('phone'),
            'Email' => $request->getPost('email'),
            'Specialization' => $request->getPost('specialization'), 
            'MedicalLicenseNumber' => $request->getPost('MLN'),
            'ClinicAddress' => $request->getPost('address'),
            'HospitalAffiliation' => $request->getPost('hos_af'),
            'Education' => $request->getPost('education'),
            'ExperienceYears' => $request->getPost('experience'),
            'Certification' => $request->getPost('certificate'),
            'ProfileImageURL' => $request->getPost('profile'),
           // 'ProfileImageURL' => $businessImageName,
            'BusinessID' => $request->getPost('bid'),
        ];

        $model = new DoctorModel();
        $model->updateDoctor($request->getPost('DoctorID'), $data);

        return redirect()->to(base_url("/doctors_table"));
    }


    public function Savedoctorsfee()
    {
        $Model = new DoctorModel();

        $data = [
            'Fee' => $this->request->getPost('fee'),
            'FeeTypeId' => $this->request->getPost('fee_type_id'),
            'doctorId' => $this->request->getPost('doctor_id'),
        ];



        $Model->insertDoctorFee($data);

        return redirect()->to(base_url("/user_form"));
    }
}
