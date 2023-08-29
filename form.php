<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>Aduan Asrma KVS</title>
</head>
<body>

    <div class="container">

    <!--navbar-->

    <div class="navbar">
        <div class="navlogo">
            <div class="logo">
                <a href="index.php"><img src="img/logokv.png" alt=""></a>
            </div>
        </div>
        <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contacts</a></li>
            <li><a href="admin.php">Admin</a></li>
        </ul>
    </div>

   <!--text-->

    <div class="text">
        <h3>Borang Aduan</h3>
    </div>

    <!--form-->

    <?php
    include('config.php');
    $dropdownQuery = "select nama from blok";
      $resultDrop = mysqli_query($conn, $dropdownQuery);
    
    ?>


    <div class="form">
        <form action="insertform.php" name="form" method="POST">
            <div class="nama">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama"><br>
            </div>
        
            <div class="blok-dorm">
                <label for="blok">Blok:</label>
                <select name="blok" id="blok">

                    <?php
        
                        while($row=mysqli_fetch_array($resultDrop))
                     {
            
                         echo "<option value= '".$row['nama']."'>".$row['nama']."</option>";
                     }
        
                     ?>

                </select>
           
            
                <label for="dorm">Dorm:</label>
                <input type="text" id="dorm" name="dorm"><br>
            </div>

            <div class="aduan">
                <label for="aduan">Aduan:</label>
                <input type="text" id="aduan" name="aduan"><br>
            </div>

            <div class="gambar">
                <label for="gambar">Tarikh:</label>
                <input type="date" id="tarikh" name="tarikh"><br><br>
            </div> 

        <center>
        <input type="submit" value="Submit" class="submit" name="submit">
        </center>
      </form> 
    </div>

    <!--footer-->

    <div class="footer">
        <p>Copyright &copy; 2023 <span>Kolej Vokasional Sepang</span></p>
    </div>

    </div>
    <script src="script.js"></script>



</body>
</html> 