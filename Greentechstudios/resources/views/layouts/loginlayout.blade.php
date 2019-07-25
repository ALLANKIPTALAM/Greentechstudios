  <!DOCTYPE html>
    <!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>GreenTech Studios</title>

        <!-- Vendor CSS FOR LOGIN-->
        <link href="./vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link href="./vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
        <!-- CSS for Inputing email for password rest -->
        <link href="../vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link href="../vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
         <!-- Vendor CSS FOR password reset-->
        <link href="../../vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link href="../../vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- CSS for login-->
        <link href="./css/app_1.min.css" rel="stylesheet">
        <link href="./css/app_2.min.css" rel="stylesheet">
        <!-- CSS for Inputing email for password rest -->
        <link href="../css/app_1.min.css" rel="stylesheet">
        <link href="../css/app_2.min.css" rel="stylesheet">
        <!-- CSS for password rest -->
        <link href="../../css/app_1.min.css" rel="stylesheet">
        <link href="../../css/app_2.min.css" rel="stylesheet">
        <!-- CSS for FLASH NOTIFICATION  
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
    </head>

    <body>

@yield('content')

        <!-- Javascript Libraries -->
        <script src="./../public/vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="./../public/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <script src="./../public/vendors/bower_components/Waves/dist/waves.min.js"></script>

        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

        <script src="./../public/js/app.min.js"></script>
        <script>
$('div.alert').not('.alert-important').delay(5000).fadeOut(350);
</script>
    </body>
</html>