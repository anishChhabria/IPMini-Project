<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script type="text/JavaScript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" ></script>
    <title>Document</title>
</head>
<body>
    @include('navbar.navs') 
    <div class="" style="left: 25%; position: relative;height: 100%;width: 75%;">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam quasi saepe sequi! Cum non tenetur dignissimos accusamus adipisci doloremque vitae sapiente amet, quas, ad deserunt. Voluptas ullam praesentium repudiandae eaque!

    </div>
    <script>
        var PreBuilt = document.getElementById('Pre-built');
        var services = document.getElementById('services');
  
        PreBuilt.addEventListener('click', function() {
        $(PreBuilt).toggleClass("active");
        $(".parent:not(#Pre-built)").toggleClass("invisible");
        }, false);
    
        services.addEventListener('click', function() {
        $(services).toggleClass("active");
        $(".parent:not(#services)").toggleClass("invisible");
        }, false);
    </script>  
</body>
</html> 

