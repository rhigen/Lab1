<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class StudentController extends BaseController
{
    private $student;
    private $section;
    
    public function __construct()
    {
        $this->student =new \App\Models\StudentModel();
        $this->student =new \App\Models\StudentModel();
    }

    public function student()
    {
        $data= [
            'student'=> $this->student->findAll(),
            'section'=> $this->student->findAll(),
            
        ];
        return view('main', $data);
    }

    public function create()
    {
        $data=[
            'StudName'=> $this->request->getVar('name'),
            'StudGender'=> $this->request->getVar('gender'),
            'StudCourse'=> $this->request->getVar('course'),
            'StudSection'=> $this->request->getVar('section'),
            'StudYear'=> $this->request->getVar('year'),

        ];

        $this->student->save($data);
        return redirect()->to('main');

    }

    public function delete($stud)
    {
        $this->student->delete($stud);
        return redirect()->to('main');
    }
    public function index()
    {
        //
    }
}
