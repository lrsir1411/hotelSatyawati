 <div class="topnav" id="myTopnav">
     
      <a href="#index"  target="_parent" <?php if($current == 'home') {echo 'style=background-color:#870074';} ?>>Home</a> 
      <a href="#gallery"  target="_parent" <?php if($current == 'gallery') {echo 'style=background-color:#870074';} ?>>Hotel Photographs</a>
      <a href="#services"  target="_parent" <?php if($current == 'Services') {echo 'style=background-color:#870074';} ?>>Services</a>
       <a href="#timing"  target="_parent" <?php if($current == 'Timing') {echo 'style=background-color:#870074';} ?>>Timing</a>
      <a href="#address"  target="_parent" <?php if($current == 'address') {echo 'style=background-color:#870074';} ?>>Address</a>


      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>

  

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    


</script>
