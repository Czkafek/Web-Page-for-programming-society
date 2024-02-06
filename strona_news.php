<?php
    include_once('database.php');
    include_once('header.html');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="text-light">
    <?php
    $news = $_GET['news'];
    $news_k = $news+1;
    $query = "SELECT * FROM `News` ORDER BY `DateTime` DESC LIMIT $news,$news_k ;";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
    //echo $row['Title'].'<br>';
    //echo $row['Content'];


    // echo $_GET['news'].'<br>';
    // echo time().'<br>';
    // $data = New DateTime();
    // var_dump($data);
    // echo $data->format('m/d/Y');?>
    <div class="row sticky-top float-end d-none d-lg-block my-3 w-25">
    <div class="col">
        <h3 class="text-light" style="padding: 0%; margin: 0%;">Na czasie</h3>
        <img class="d-inline" src="Images/Line 1.png">
        <form class="form-inline my-2">
        <input class="form-control mr-sm-2" type="email" placeholder="Mail" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Zapisz się</button>
    </form>
    </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-9 mb-5">
            <h1><?php echo $row['Title']?></h1>
            <p style="font-weight: lighter;"><?php echo $row['DateTime']?></p>
            <img class="img-fluid" src="<?php echo $row['Image']?>">
            <p><?php echo $row['Content']; ?></p>
        </div>
        <div class="row text-center"><h1>Inne Artykuły:</h1></div>
        
        <div class="row row-cols-1 row-cols-lg-3 g-4 mx-auto my-5">
            <?php 
            for ($i=0; $i<3; $i++){
                $liczba = random_int(0,ilosc_wierszy()-1);
                $row = get_news($liczba);
              echo '<div class="col">';
              echo  '<a href="strona_news.php?news='.$i.'">';
              echo '<div class="card h-100 border-0">';
              echo'<img src="'.$row['Image'].'" class="card-img-top" alt="...">';
              echo  '<div class="card-body">';
              echo'    <h5 class="card-title">'.$row['Title'].'</h5>';
              echo'    <p class="card-text">'.$row['Short'].'</p>';
              echo '</div>';
              echo  '<div class="card-footer">';
              echo'    <small class="text-body-secondary">'.$row['DateTime'].'</small>';
              echo'  </div>';
              echo'</div>';
              echo'</a>';
              echo'</div>';
              }
            
            
            
            ?>
        </div>
            
       
    </div>
    </div>

</body>
</html>
<?php
include_once('footer.html')
?>