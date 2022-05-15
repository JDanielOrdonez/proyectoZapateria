<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Sidebar Menu  | CodingLab </title>
    <link rel="stylesheet" href="../css/estilosDash.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">      
        <div class="logo_name">La Güera</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
       <a href="#">
         <i class='bx bx-user' ></i>
         <span class="links_name">Clientes</span>
       </a>
       <span class="tooltip">Clientes</span>
     </li>
     <li>
       <a href="#">
        <!--  -->
        <!-- <i class="fa-solid fa-file-chart-column"></i> -->
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Ingresos</span>
       </a>
       <span class="tooltip">Ingresos</span>
     </li>
     <li>
       <a href="#">
         <i class="bx bx-folder"></i>
         <span class="links_name">Reportes</span>
       </a>
       <span class="tooltip">Reportes</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cart-alt' ></i>
         <span class="links_name">Productos</span>
       </a>
       <span class="tooltip">Productos</span>
     </li>
    </ul>
  </div>
  <section class="home-section">
      <div class="text">Dashboard</div>
  </section>


  <script src="../js/script.js"></script>

</body>
</html>
