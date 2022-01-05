<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/custamer.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <header>
        <button class="search" type="submit"><i class="fa fa-search"></i></button>
        <input type="text" name="search" placeholder="search">
        <img src="./image/plus.png" alt="" onclick= "document.getElementById('id01').style.display='block' ">
        
    </header>
    <div class="history" title="more title">

         <?php
        for ($x = 0; $x < 3; $x++) {
            echo '<section >'
        . "<div>".
        "<span>ID :</span><span>3131286</span> <span class='name'>name :</span> <span class='name1'> jamal ahmad noor shaksheer</span> ".
        "</div>".
        "<div>".
        "<span>phone :</span><span>0568888813</span><span>address :</span><span>nablus</span>".
        "</div>". 
        "<div>".
        "<span>email :</span> <span>test.2020hhhj@samemail.com  </span>".
        "</div>
        <div></div>
        <img src='./image/download.jpeg'>
        </section>" ;} 
         ?>  
        <!-- <section>
            <table>
                <tr>
                    <td>ID :</td><td>3131286</td><td>name :</td><td>jamal ahmad noor shaksheer</td><td rowspan="4" ><img src='./download.jpeg'></td>
                </tr>
                <tr>
                    <td>phone :</td><td>0568888813</td><td>address :</td><td>nablus</td>
                </tr>
                <tr>
                    <td>email :</td><td colspan=3> est.2020hhhj@samemail.com </td>
                </tr>
            </table>
        </section> -->

    </div>
    <div id="id01" class="modal">
        <div class="pop">
            <form action="">
                <input type="text" name="name" placeholder="Custamer name">
                <input type="text" name="id" placeholder="Custamer ID">
                <input type="text" name="phone" placeholder="phone number">
                <input list="address" name="address" placeholder="address" >
                <datalist id="address">
                    <option value="Jerusalem">
                    <option value="Nablus">
                    <option value="Hebron">
                    <option value="Tulkarm">
                    <option value="Qalqilyah">
                    <option value="Bayt Hanun">
                    <option value="Janin">
                    <option value="Tubas">
                    <option value="Salfit">
                    <option value="Birqin">
                    <option value="Ramallah">
                </datalist>
                <input type="text" name="email" placeholder="Email">

                <div id="downside" >
                    <input type="submit" value="Add"  class="butt save"> 
                    <input type="button" value="Cancel" class="butt cancel" 
                       onclick="document.getElementById('id01').style.display='none'">  
                </div>
                 </form>
                 <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                  <!-- <img src="./close.png" onclick="document.getElementById('id01').style.display='none'"> -->
        </div>
    </div>


</body>

</html>