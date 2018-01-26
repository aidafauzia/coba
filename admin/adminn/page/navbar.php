<div class="sidebar-menu">
 <header class="logo">
  <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.php"> <span id="logo"> <h1>Traveler</h1></span> 
  <!--<img id="logo" src="" alt="Logo"/>--> 
</a> 
</header>

<div class="menu">
 <ul id="menu" >
  <li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
  <li id="menu-academico" ><a href="#"><i class="fa fa-plane"></i> <span>Pesawat</span> <span style="float: right"></span></a>
    <ul id="menu-academico-sub" >
      <li id="menu-academico-avaliacoes" ><a href="inpesawat.php">Input Data Pesawat</a></li>
      <li id="menu-academico-boletim" ><a href="dafpesawat.php">Data Pesawat</a></li>
    </ul>
  </li>
  <li><a href="dafcostumer.php"><i class="fa fa-user"></i> <span>Data Costumer</span></a></li>
  <li id="menu-academico" ><a href="#"><i class="fa fa-plane"></i> <span>Rute Pesawat</span> <span style="float: right"></span></a>
    <ul id="menu-academico-sub" >
      <li id="menu-academico-avaliacoes" ><a href="inrute.php">Input Rute Pesawat</a></li>
      <li id="menu-academico-boletim" ><a href="dafrute.php">Data Rute Pesawat</a></li>
    </ul>
  </li>
  <li><a href="logout.php"><i class="fa fa-sign-out"></i> <span>Log Out</span></a></li>
</ul>
</div>
</div>
<div class="clearfix"></div>		
</div>
<script>
 var toggle = true;

 $(".sidebar-icon").click(function() {                
  if (toggle)
  {
   $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
   $("#menu span").css({"position":"absolute"});
 }
 else
 {
   $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
   setTimeout(function() {
    $("#menu span").css({"position":"relative"});
  }, 400);
 }

 toggle = !toggle;
});
</script>