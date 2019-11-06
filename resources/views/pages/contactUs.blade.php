@extends('navbar.navbar')

@section('content')
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        text-align: center;
        font-family: arial;
        margin: 30px;

        }
        
        .title {
        color: grey;
        font-size: 18px;
        }
        
    </style>
    <div class="row">        
        <div class="card col-4 ">
            <img src="{{asset('/images/contactUs/contact1.jpeg')}}" alt="Anshul" style="width:100%">
            <h1>Anshul Chaudhary</h1>
            <p class="title">Founder and Developer</p>
            <p>Harvard University</p>
            <div style="margin: 24px 0;">
                <a class="Contactlink" href="https://www.instagram.com/anshul_218"><i class="fa fa-instagram"></i></a> 
                <a class="Contactlink" href="#"><i class="fa fa-twitter"></i></a>  
                <a class="Contactlink" href="#"><i class="fa fa-linkedin"></i></a>  
                <a class="Contactlink" href="#"><i class="fa fa-facebook"></i></a> 
            </div>
            Mobile No.: 9912345989
            Email:2017.anshul.chaudhary@ves.ac.in
            <br>
        </div>

        <div class="card col-4">
            <img src="{{asset('')}}" alt="Anish" style="width:100%">
            <h1>Anish Chhabria</h1>
            <p class="title">Founder and Developer</p>
            <p>Harvard University</p>
            <div style="margin: 24px 0;">
                <a class="Contactlink" href="https://www.instagram.com/chhabria_anish"><i class="fa fa-instagram"></i></a> 
                <a class="Contactlink" href="#"><i class="fa fa-twitter"></i></a>  
                <a class="Contactlink" href="#"><i class="fa fa-linkedin"></i></a>  
                <a class="Contactlink" href="#"><i class="fa fa-facebook"></i></a> 
            </div>
            Mobile No.: 9912334542
            Email:2017.anish.chhabria@ves.ac.in
            <br>
        </div>

        <div class="card col-4">
            <img src="{{asset('/images/contactUs/contact1.jpeg')}}" alt="Parth" style="width:100%">
            <h1>Parth <br> Kodnani</h1>
            <p class="title">Founder and Developer</p>
            <p>Harvard University</p>
            <div style="margin: 24px 0;">
                <a class="Contactlink" href="https://www.instagram.com/parthkodnani99"><i class="fa fa-instagram"></i></a> 
                <a class="Contactlink" href="#"><i class="fa fa-twitter"></i></a>  
                <a class="Contactlink" href="#"><i class="fa fa-linkedin"></i></a>  
                <a class="Contactlink" href="#"><i class="fa fa-facebook"></i></a> 
            </div>
            Mobile No.: 9912344346
            Email:2017.parth.kodnani@ves.ac.in
            <br>
        </div>
    </div>  


@endsection