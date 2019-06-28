<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
        <title>Somati</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-startup-image" href="launch.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/favicon/site.webmanifest">
        <link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="css/main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">


        <style>
        .wrapper {
        display: grid;
        grid-template-columns: 1fr 280px 1fr;
        grid-template-rows: 60px auto;
        grid-gap: 5px;
        max-height: 75.5%;
        overflow-y: auto;
        overflow-x: hidden;

        }
        table {
            display:grid;
            grid-column: 2;
            grid-row: 2;
            overflow-y:scroll;
            width: 280px;

        }
        tbody {
            display:grid;
            grid-template-columns: 240px 40px;
            grid-template-rows: repeat(autofit, 60px);
            grid-row-gap: 7px;

        }
        .s {
            display:grid;
            grid-template-columns: 180px 80px;
            grid-template-rows: 20px 20px 20px;
            grid-column: 1 / 3; 
            padding-top: 5px;
            padding-bottom: 5px;
            background-color:#FFC107;

        }
        .sb {
            display:grid;
            grid-column: 1 / 3;
            grid-template-columns: 180px 80px;
            grid-template-rows: 20px 20px 20px;
            padding-top: 5px;
            padding-bottom: 5px;
            background-color:#76B892;
        }

        .ab {
            display:grid;
            grid-column: 1 / 3;
            grid-template-columns: 180px 80px;
            grid-template-rows: 20px 20px 20px;
            padding-top: 5px;
            padding-bottom: 5px;
            background-color: #DC3545;
            
        }
        .nc {
            display:grid;
            grid-column: 1 / 3;
            grid-template-columns: 180px 80px;
            grid-template-rows: 20px 20px 20px;
            padding-top: 5px;
            padding-bottom: 5px;
            background-color: #17A2B8;
            
        }

        .ud {
            display:grid;
            grid-template-columns: 180px 80px;
            grid-template-rows: 20px 20px 20px;

        }



        .ud:nth-of-type(even) {
            display:grid;
            grid-column: 1 / 3;
            background-color:#212529;
            color:white;
            padding-top: 5px;
            padding-bottom: 5px;
            
        }
        .ud:nth-of-type(odd) {
            display:grid;
            grid-column: 1 / 3;
            background-color:#444c54;
            color:white;
            padding-top: 5px;
            padding-bottom: 5px;
        }
        .ud.td.box {
            color: white;
        }

        td {
            margin-left: 4px;
            margin-top: 4px;
            align-items:center;

        }
        .left {
            display: grid;
            grid-column:1;
            grid-row: 1 / 2;
            word-break:break-word;
        }

        .boxs {
            display:grid;
            grid-column:2;
            grid-row: 1 / 4;
            margin-left: 30px;
            justify-items: center;
            align-items:center;
            z-index:999;
            color:white;
            

        }
        .box {
            display:grid;
            grid-column:2;
            grid-row: 1 / 4;
            justify-items: center;
            align-items:center;
            z-index:999;

        }
        .icon {
            display:grid;
            grid-column: 2;
        }

        tr.ud {
            font-family: 'Raleway', sans-serif;
            font-size:1.1em;
            font-weight: bolder;
        }
        tr.a {
            font-family: 'Raleway', sans-serif;
            font-size:1.1em;
            font-weight: bolder;
        }
        tr.ab {
            font-family: 'Raleway', sans-serif;
            font-size: 1.1em;
            font-weight: bolder;
            }
        tr.s {
            font-family: 'Raleway', sans-serif;
            font-size:1.1em;
            font-weight: bolder;
        }
        tr.sb {
            font-family: 'Raleway', sans-serif;
            font-size:1.1em;
            font-weight: bolder;
        }
        tr.nc {
            font-family: 'Raleway', sans-serif;
            font-size:1.1em;
            font-weight: bolder;
        }
        .forward {
            display:grid;
            grid-column:3;
            justify-items:center;
            align-items:center;
            color:white;
        }
   
        </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php
        //get url var
            $page = $_GET['page'];
            if(empty($page)){
                $page = '2';
            }
        $page2nav = '';

        if($page=="2"){
            $output = file_get_contents('http://192.168.2.45/stat.html');
            $output = strip_tags($output,'<img><body><title><script><table><tbody><input><form><tr><td><div><button><style>');
            $page2nav = ' class="active"';
        }
        ?>
        <div class="headerbox">
                <div class="header"><a href="index.html"><img src="assets/LOGO_Vooruit_wit.svg"/></a></div>
        </div>

        <div class="wrapper">
            <div class="currentpage">current</div>
            <?php echo $output; ?>
        </div>
        <div class="footer">
            <div class="back"><script>
            document.write('<a href="javascript:history.back()"><i class="fas fa-angle-left fa-2x"></i></a>');</script></div>
            <div class="forward"><i class="fas fa-info fa-lg"></i></div>
        </div>
        <script src="" async defer>
        <script src="https://use.fontawesome.com/89f6b15fed.js"></script>
        </script>
        <script>
            $(".nc td:nth-child(1)").remove("")
            $(".nc td:nth-child(1)").addClass("left")
            $(".nc td:nth-child(2)").addClass("box")

            $(".ab td:nth-child(1)").remove("")
            $(".ab td:nth-child(1)").addClass("left")
            $(".ab td:nth-child(2)").addClass("box")

            $(".s td:nth-child(1)").remove("")
            $(".s td:nth-child(1)").addClass("left")
            $(".s td:nth-child(2)").addClass("boxs")
            $(".s .boxs").addClass("fas fa-exclamation")

            $(".sb td:nth-child(1)").remove("")
            $(".sb td:nth-child(1)").addClass("left")
            $(".sb td:nth-child(2)").addClass("box")
  
            $(".ud td:nth-child(1)" ).remove("")
            $(".ud td:nth-child(1)").addClass("left")
            $(".ud td:nth-child(2)").addClass("box")

            $('input[type=image]').addClass("icon")
            $("input").removeAttr("src")
            $("input").removeAttr("alt")
            $("input:nth-child(2)").attr("type", "image")

            $(".ud .icon").attr("src","assets/check.svg")
            $(".ud input:nth-child(2)").attr("width","20px")
            $(".ud .icon").attr("display", "grid")
            $(".ud .icon").attr("grid-column", "2")

            $(".sb .icon").attr("src","assets/times-solid.svg")
            $(".sb input:nth-child(2)").attr("width","20px")
            $(".sb .icon").attr("display", "grid")
            $(".sb .icon").attr("grid-column", "2")
        </script>
        <script>
            jQuery(document).ready(function(){
            jQuery('.wrapper').scrollbar();
            });
        </script>
        
    </body>
</html>