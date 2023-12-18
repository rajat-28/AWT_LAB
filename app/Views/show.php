<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>students data</title>
  <style>
    table,td,th{
      border-collapse: collapse;
      font-size: 20px;
      border: 1px solid black;
      padding: 8px;
    }
    table{
      margin: 35px;
    }
  </style>
</head>
<body>
  <table border='1px' cellpadding="6px" cellspacing="2px">
    <tr>
      <th>Student URN</th>
      <th>Course ID</th>
      <th>Branch Code</th>
      <th>Semester</th>
      <th>Scheme Code</th>
      <th>Leet</th>
      <th>Training</th>
      <th>Subject Code</th>
      <th>M Code</th>
      <th>Theory</th>
      <th>Elective</th>
      <th>Int max marks</th>
      <th>Ext Max marks</th>
      <th>Credit</th>
      <th>Created at</th>
    </tr>
    <?php foreach($students as $student){?>
      <tr>
        <td><?php echo $student['student_urn']; ?></td>
        <td><?php echo $student['course_id']; ?></td>
        <td><?php echo $student['branch_code']; ?></td>
        <td><?php echo $student['semester']; ?></td>
        <td><?php echo $student['scheme_code']; ?></td>
        <td><?php echo $student['leet']; ?></td>
        <td><?php echo $student['training']; ?></td>
        <td><?php echo $student['subject_code']; ?></td>
        <td><?php echo $student['mcode']; ?></td>
        <td><?php echo $student['theory']; ?></td>
        <td><?php echo $student['elective']; ?></td>
        <td><?php echo $student['int_marks']; ?></td>
        <td><?php echo $student['ext_marks']; ?></td>
        <td><?php echo $student['credit']; ?></td>
        <td><?php echo $student['created_at']; ?></td>
        <td><a href="<?php echo base_url(); ?>Home/delete/<?php echo $student['student_urn']; ?>"><button class="btn btn-lg btn-danger">Delete</button></a></td>
        <td><a href="<?php echo base_url(); ?>Home/edit/<?php echo $student['student_urn']; ?>"><button class="btn btn-lg btn-primary">Edit</button></a></td>
      </tr>
    <?php } ?>
  </table>
</body>
</html>