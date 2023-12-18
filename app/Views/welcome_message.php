<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Student Registration</title>
</head>
<body>
  <div class="container">
    <h1 class="m-3">Studnet Registration Form</h1>
    <div class="row">
      <div class="col-6">
        <form class="mb-5" method="POST" action="<?php echo site_url('Home/insert'); ?>">
          <div class="mb-3">
            <label class="form-label">Course Code</label>
            <input type="text" class="form-control" name="course_id">
          </div>
          <div class="mb-3">
            <label class="form-label">Branch Code</label>
            <input type="text" class="form-control" name="branch_code">
          </div>
          <div class="mb-3">
            <label class="form-label">Semester</label>
            <input type="number" class="form-control" name="semester">
          </div>
          <div class="mb-3">
            <label class="form-label">Scheme Code</label>
            <input type="text" class="form-control" name="scheme_code">
          </div>
          <div class="mb-3">
            <label class="form-label">Leet/Non-Leet Status</label>
            <input type="text" class="form-control" name="leet">
          </div>
          <div class="mb-3">
            <label class="form-label">Six month training</label>
            <input type="text" class="form-control" name="training">
          </div>
          <div class="mb-3">
            <label class="form-label">Subject Code</label>
            <input type="text" class="form-control" name="subject_code">
          </div>
          <div class="mb-3">
            <label class="form-label">M-Code</label>
            <input type="text" class="form-control" name="mcode">
          </div>
          <div class="mb-3">
            <label class="form-label">Theory/Practical</label>
            <input type="text" class="form-control" name="theory">
          </div>
          <div class="mb-3">
            <label class="form-label">Elective status</label>
            <input type="text" class="form-control" name="elective">
          </div>
          <div class="mb-3">
            <label class="form-label">Internal max marks</label>
            <input type="number" class="form-control" name="int_marks">
          </div>
          <div class="mb-3">
            <label class="form-label">External max marks</label>
            <input type="number" class="form-control" name="ext_marks">
          </div>
          <div class="mb-3">
            <label class="form-label">Credit</label>
            <input type="number" class="form-control" name="credit">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>