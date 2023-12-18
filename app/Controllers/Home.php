<?php

namespace App\Controllers;
use App\Models\StudentModel;

class Home extends BaseController
{
    public function index(): string
    {
        // return view('formik');
        return view('welcome_message');
    }
    public function insert(){
        $data = [
            'course_id' => $this->request->getVar('course_id'),
            'branch_code' => $this->request->getVar('branch_code'),
            'semester' => $this->request->getVar('semester'),
            'scheme_code' => $this->request->getVar('scheme_code'),
            'leet' => $this->request->getVar('leet'),
            'training' => $this->request->getVar('training'),
            'subject_code' => $this->request->getVar('subject_code'),
            'mcode' => $this->request->getVar('mcode'),
            'theory' => $this->request->getVar('theory'),
            'elective' => $this->request->getVar('elective'),
            'int_marks' => $this->request->getVar('int_marks'),
            'ext_marks' => $this->request->getVar('ext_marks'),
            'credit' => $this->request->getVar('credit'),
        ];
        $model = new StudentModel();
        $model->insert($data);
        echo "<h1>Data sent successfully...</h1>";
    }
    public function show(){
        $model = new StudentModel();
        $data['students'] = $model->findAll();
        return view('show',$data);
    }
    public function delete($id = null){
        $model = new StudentModel();
        $data['students'] = $model->where('student_urn', $id)->delete();
        return redirect()->to( base_url('Home/show') );
    }
    public function edit($student_urn = null){
        $model = new StudentModel();
        $data['student'] = $model->where('student_urn',$student_urn)->first();
        return view('edit',$data);
    }
    // public function edit($id = null){
    //     $model = new StudentModel();
    //     $data['user'] = $model->where('student_urn',$id)->first();
    //     return view('edit',$data);
    // }
    public function update(){
        $data = [
            'course_id' => $this->request->getVar('course_id'),
            'branch_code' => $this->request->getVar('branch_code'),
            'semester' => $this->request->getVar('semester'),
            'scheme_code' => $this->request->getVar('scheme_code'),
            'leet' => $this->request->getVar('leet'),
            'training' => $this->request->getVar('training'),
            'subject_code' => $this->request->getVar('subject_code'),
            'mcode' => $this->request->getVar('mcode'),
            'theory' => $this->request->getVar('theory'),
            'elective' => $this->request->getVar('elective'),
            'int_marks' => $this->request->getVar('int_marks'),
            'ext_marks' => $this->request->getVar('ext_marks'),
            'credit' => $this->request->getVar('credit'),
        ];
        $student_urn = $this->request->getVar('student_urn');
        $model = new StudentModel();
        $model->update($student_urn,$data);
        return redirect()->to( base_url('Home/show') );
    }
}
