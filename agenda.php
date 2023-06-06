<?php

include('protect.php');

?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Agenda - DoctorSystem</title>
  <script src='fullcalendar-scheduler/dist/index.global.js'></script>
  <script>

document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'timeline'


  });
  calendar.render();
});

</script>
 </head>
 <body>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Doctor<b>System</b> <i class="bi bi-heart-pulse-fill"></i> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="container">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="painel.php"> <i class="bi bi-house-fill"></i> HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="agenda.php"> <i class="bi bi-calendar-heart-fill"></i> AGENDA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pacientes.php"> <i class="bi bi-person-fill"></i> </i> PACIENTES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="medicos.php"> <i class="bi bi-clipboard2-pulse-fill"></i> MÉDICOS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="exames.php"> <i class="bi bi-file-earmark-medical-fill"></i> EXAMES</a>
      </li>
    </ul>
	</div>
    <div class="form-inline my-2 my-lg-0">
      <a href="#" class="nav-link disabled ">  </i> Bem vindo ao Painel, <?php echo $_SESSION['nome']; ?></a>
      <button class="btn btn-danger"> <a class="text-light"type="submit" href="logout.php"> <i class="bi bi-person"></i> Sair</a> </button>
    </div>
  </div>
</nav>
</br>
<main>
<div class="container">
<div id='calendar'></div>

</div>


</main>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 </body>
 </html>