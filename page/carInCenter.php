    <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/history.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="history" title="more title">
        
        <?php
        for ($x = 0; $x < 3; $x++) {
            echo '<section style="cursor: default;">'
        . "<div>".
        "<span class='h'>volkswagen</span><span class='h'>passat</span> <span class='h'>2010</span> <span class='row'>Plate NO. :</span> <span>7-3131-98</span>".
        "</div>".
        "<div>".
        "<span>Time arrived :</span><span>06:55:30</span><span class='row'>Time delvariy :</span><span>3:30:14</span><span class='row'>States :</span><span>wait</span>".
        "</div>". 
        "<div>".
        "<span>Name :</span> <span>jamal ahmad noor shaksheer</span>".
        "</div>
        <div></div>
        <img src='./brand/vw.png'>
        </section>" ;
        }
          
        ?>

    </div>
    
</body>

</html>