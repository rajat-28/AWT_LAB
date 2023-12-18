<?php
namespace App\Models;
use CodeIgniter\Model;
class StudentModel extends Model{
  protected $table = 'students';
  protected $primaryKey = 'student_urn';
  protected $allowedFields = ["course_id", "branch_code", "semester","scheme_code", "leet", "training","subject_code", "mcode","theory", "elective", "int_marks", "ext_marks", "credit"];
}

?>