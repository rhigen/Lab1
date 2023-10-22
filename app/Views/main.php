<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<form action=""method="post">
<div class="row g-3 align-items-center">
  <div class="col-auto">
    <input type="text" name="name" class="form-control" placeholder="Name">
  </div>
  <div class="col-auto">
    <select name="gender"> Choose a gender
        <option value="Male">Male</option>
        <option value="Male">Female</option>
        <option value="Male">Prefer not to say</option>
     </select>
        
  </div>
  <div class="col-auto">
    <input type="text" name="course" class="form-control" placeholder="Course">
  </div>
  <div class="col-auto">
    <input type="text" name="section" class="form-control" placeholder="Section">
  </div>
  <div class="col-auto">
    <input type="number" name="year" class="form-control" placeholder="Year">
  </div>
  <div class="col-auto">
    <button type="submit">Save</button>
    <div class="col-auto">
       
    </div>
  <form>
 
  </div>
</div>

<?php

foreach($student as $stud)
{
    ?>

<ul>
    
    <li><?php echo "Name: " . $stud['StudName'];?></li>
    <li><?php echo "Gender: " .  $stud['StudGender'];?></li>
    <li><?php echo "Course: " . $stud['StudCourse'];?></li>
    <li><?php echo "Section: " . $stud['StudSection'];?></li>
    <li><?php echo"Year: " . $stud['StudYear'];?></li>
    <li><a href="/delete/<?=$stud['StudName']?>">Delete</a></li>
    <br /><hr>
    
</ul>
    <?php
}

?>
</body>
</html>






