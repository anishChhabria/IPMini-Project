@extends('navbar.navbar')

@section('content')
<style>
.mainPage{
    background-color: black;
    widows: 100%;
    height: 450px;
}
h1{
    margin: 0px;
}
.about strong{
    color: #254E58;
    font-size: 55px !important;
}
.us strong{
    color: #4F4A41;
    font-size: 55px !important;    
}
.aboutUs{
    margin-left: 35px;
    margin-top: 8px;
    color: white;
    font-size: 18px;
}
.carousel-indicators{
    color: black;
    background-color: black;
}
.productMade{
    color: #254E58;
}
</style>
    <div class="mainPage">
        <div class="row">
            <div class="col-6">
                <img src="{{asset('images/aboutUs/aboutUs.jpg')}}" alt="" height="450" width="550">  
            </div>
            <div class="col-6">
                <div class="about">
                    <strong>About</strong>
                </div>
                <div class="row">
                    <div class="col-1 us">
                            <h1><strong>Us</strong></h1>
                    </div>
                    <div class="col-10 aboutUs">
                        BeasrRigs is Indias first E-commerse website started by students that delivers the best products at the most affortable prices. We provide all latest hardware for computers along with high quality peripherals. We assure to have a great and smooth user experience.
                        <br>
                        <br>
                        Also we provide all genuine products with warrenty clams. The future of shooping is E-commerse that makes us the best choice that you can make.  
                    </div>
                </div>
            </div>
        </div>
        <br>
        <h1 style="color:blue;">System Built By Us</h1>
        <br>
        <div class="row">
            <div class="col-5">
                <br>
                <br>
                <br>
                <br>
                <h1>Product: Blue Mix</h1>
                <ul class="productMade">
                    <li><h3>Processor: i9 8900k</h3></li>
                    <li><h3>Motherboard: Asus Z470x</h3></li>
                    <li><h3>GPU: GForce GTX 1080ti in SLI</h3></li>
                    <li><h3>Ram: Hyperx 16gb x 4 kit</h3></li>
                    <li><h3>Storage: 1tb SSD</h3></li>
                    <li><h3>PSU: Corsair 1200W </h3></li>
                    <li><h3>Cabinate: ATX Tempered glass</h3></li>
                </ul>
            </div>
            <div class="col-5">
                <img src="{{asset('images/aboutUs/product1.png')}}" alt="product1" height="600" width='600'>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <img src="{{asset('images/aboutUs/product2.jpg')}}" alt="product1" height="600" width='600'>
            </div>
            <div class="col-5">
                <br>
                <br>
                <br>
                <br>
                <h1>Product: RGB Buster</h1>
                <ul class="productMade">
                    <li><h3>Processor: R7 3700x</h3></li>
                    <li><h3>Motherboard: Asus AB570</h3></li>
                    <li><h3>GPU: MSI RTX 2080 Super </h3></li>
                    <li><h3>Ram: G.Skill 16gb x 4 kit RGB</h3></li>
                    <li><h3>Storage: 1tb SSD</h3></li>
                    <li><h3>PSU: ThermalTake 650W </h3></li>
                    <li><h3>Cabinate: ThermakTake RGB</h3></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-5">
                <br>
                <br>
                <br>
                <br>
                <h1>Product: Cool Dragon</h1>
                <ul class="productMade">
                    <li><h3>Processor: i7 9700k</h3></li>
                    <li><h3>Motherboard: Gigabyte Z470</h3></li>
                    <li><h3>GPU: Asus RTX 2070</h3></li>
                    <li><h3>Ram: AData 16gb x 2 kit</h3></li>
                    <li><h3>Storage: 1tb HDD</h3></li>
                    <li><h3>PSU: Corsair 500W </h3></li>
                    <li><h3>Cabinate: Corsair Spec-10</h3></li>
                </ul>
            </div>
            <div class="col-5">
                <img src="{{asset('images/aboutUs/product3.jpg')}}" alt="product1" height="600" width='600'>
            </div>
        </div>
    </div>    
@endsection