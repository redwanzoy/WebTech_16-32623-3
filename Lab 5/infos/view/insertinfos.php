
<?php
require('../control/reportinsert.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reportinsert.css">
    <link rel="stylesheet" href="../css/topnav.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet" />



    <title>Add Infos</title>
</head>

<body>


<h1 style="text-align: center; margin-top :100px;">Insert Infos</h1>

<div id="main-container">



    <div class="news-grid-container">
       

        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">


            <div class="gamer">
                <h4> title: </h4>

            </div>

            <div class="block">


                <textarea name="title" rows="2" cols="56"></textarea>

                <?php echo $validateTitle ?>

            </div>

            <br>

            <div class="gamer">
                <h4> body: </h4>

            </div>

            <div class="block">

                <textarea name="body" rows="15" cols="56"></textarea>
                <?php echo $validateBody ?>


            </div>

            <fieldset>

                <div class="gamer">
                    <h4>
                        <legend> Picture </legend>
                    </h4>

                </div>

                <div class="small">
                    <input type="file" id="image" name="image" accept="image/*" value="<?php echo $image; ?>">
                </div>
            </fieldset>




            <div class="block ">
                <input type=text list=catagory name="catagory" placeholder="News Catagory">
                <datalist id=catagory>
                    <option> Valorant</option>
                    <option> CSGO </option>
                    <option> Dota</option>
                    <option> COD</option>
                    <option> PUBG</option>
                    <option> FIFA </option>
                    <option> Mobile Legends </option>
                    <option> NFS</option>

                </datalist>
                <p class="em"><?php echo $validateCatagory; ?></p>
            </div>







            <div class="block button-signup">
                <input type="submit" value="Insert" name="Insert">
                <br>
            </div>
        </form>
        <h3><?php echo $success; ?></h3>

        <div class="gamer">
            <h3> <a href="./home.php"> Homepage </a></h3>

        </div>
        
    </div>






</body>

</html>