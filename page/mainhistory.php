<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/history.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/foopicker.css">
    <script type="text/javascript" src="js/foopicker.js"></script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <header>
        <button class="search" type="submit"><i class="fa fa-search"></i></button>
        <input type="text" name="search" placeholder="search">
        <img src="image/arrow.png" alt="arrow" id="arrow" onclick="fun()">
        <div id="connt">
        </div>
        
        <div id="cm">
        <input type="text" id="startDate" value="" placeholder="start date" readonly/>
            <input type="text" id="endDate" value="" placeholder="end date" readonly />
            <button><img src="./image/printer.png"><span>print</span></button>
        </div>
        
    </header>
    <div class="history" title="more title">
        
        <?php
        for ($x = 0; $x < 3; $x++) {
            echo '<section onclick= " '."document.getElementById('id01').style.display='block' " .'">'
        . "<div>".
        "<span class='h'>volkswagen</span><span class='h'>passat</span> <span class='h'>2010</span> <span class='row'>Plate NO. :</span> <span>7-3131-98</span>".
        "</div>".
        "<div>".
        "<span>Time arrived :</span><span>06:55:30</span><span class='row'>Time delvariy :</span><span>3:30:14</span>".
        "</div>". 
        "<div>".
        "<span>Name :</span> <span>jamal ahmad noor shaksheer</span>".
        "</div>
        <div></div>
        <img src='./brand/ford  .png'>
        </section>" ;
        }
          
        ?>

    </div>
    <div id="id01" class="modal">
        <div class="pop">
            <table >
                <tr>
                    <td style="width: 25%;">Name expert :</td>
                    <td>said</td>
                    <td style="width: 20%;">Start time :</td>
                    <td style="width: 15%;">3:30:14</td>
                </tr>
                <tr>
                    <td style="width: 20%;">Name Tech :</td>
                    <td style="width: 20%;">ali</td>
                    <td style="width: 20%;">end time :</td>
                    <td style="width: 15%;">6:55:30</td>
                </tr>
            </table>
            <section>
                <table>
                    <tr>
                        <td>description </td>
                        <td>price</td>
                    </tr>
                    <tr>
                        <td>description </td>
                        <td>price</td>
                    </tr>
                    <tr>
                        <td>description </td>
                        <td>price</td>
                    </tr>
                    <tr>
                        <td>description </td>
                        <td>price</td>
                    </tr>
                    <tr>
                        <td>description </td>
                        <td>price</td>
                    </tr>
                    <tr>
                        <td>description </td>
                        <td>price</td>
                    </tr>
                    <tr>
                        <td>description </td>
                        <td>price</td>
                    </tr>
                    <tr>
                        <td>description </td>
                        <td>price</td>
                    </tr>
                    <tr>
                        <td>description </td>
                        <td>price</td>
                    </tr>
                    <tr>
                        <td>description </td>
                        <td>price</td>
                    </tr>
                    <tr>
                        <td>description </td>
                        <td>price</td>
                    </tr>
                    <tr>
                        <td>description </td>
                        <td>price</td>
                    </tr>
                    <tr>
                        <td>description </td>
                        <td>price</td>
                    </tr>
                    <tr>
                        <td>description </td>
                        <td>price</td>
                    </tr>
                    <tr>
                        <td>description </td>
                        <td>price</td>
                    </tr>

                </table>
            </section>
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>
    </div>

    <script type="text/javascript">
        var foopicker = new FooPicker({
            id: 'startDate',
            dateFormat: 'dd/MM/yyyy',
        });
        var foopicker2 = new FooPicker({
            id: 'endDate',
            dateFormat: 'dd/MM/yyyy'
        });
        var op=false;
        // function open()
        // {consel.log(op);
        //     if(op==false)
        //     {
        //         consel.log('dsd');
        //         document.getElementById('cm').style.display='block';
        //         document.getElementById('connt').style.display='block';
        //         document.getElementById('arrow').style.transform='rotate('+ 180 +'deg)';
        //         op=true;
        //     }
        //     else
        //     {
        //         document.getElementById('cm').style.display='none';
        //         document.getElementById('connt').style.display='none';
        //         document.getElementById('arrow').style.transform='rotate('+ 0 +'deg)';
        //         op=false;
        //     }

        // }
        // When the user clicks anywhere outside of the modal, close it
        var modal = document.getElementById('id01');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        function fun()
        {
            if(op==false)
            {
                document.getElementById('cm').style.display='block';
                document.getElementById('connt').style.display='block';
                document.getElementById('arrow').style.transform='rotate('+ -180 +'deg)';
                op=true;
            }
            else
            {
                document.getElementById('cm').style.display='none';
                document.getElementById('connt').style.display='none';
                document.getElementById('arrow').style.transform='rotate('+ 0 +'deg)';
                op=false;
            }
        }
    </script>
</body>

</html>