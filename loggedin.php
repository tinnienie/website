<?php
  require "header.php" ;
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(71, 135, 185, 0.8),rgba(94, 177, 239, 0.8)">
        <li class="breadcrumb-item active" aria-current="page" style="color:white;">Home</li>
    </ol>
</nav>

<div class="card-container">
    <div class="card bg-light mb-3" style="max-width: 18rem;">
        <div class="card-header">Dementia</div>
        <div class="card-body">
            <ul style="list-style-type:circle">
                <li><a class="card-text" href="loggedin/C1.php">What is dementia</a><br></li>
                <li><a class="card-text" href="loggedin/C2.php">Tips for communicating with a
                        person with dementia</a><br></li>
                <li><a class="card-text" href="loggedin/C3.php">Dealing with the troubling
                        behavior of a person with dementia</a></li>
            </ul>
        </div>
    </div>

</div>
<center>
    <a href="loggedin/all_courses.php" class="mybtn2">Chapters</a>
</center>



<?php
  require "footer.php";
   ?>