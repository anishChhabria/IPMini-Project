<div >
    <div class="content">
        <div class="wrap">
            <div class="content-top" style="text-align:center; top:100px; position:relative;background-color:#88BDBC;width:400px;left:600px">
                <br>
                <h3>Payment</h3>
                <form action="/placeOrder" method="post">
                    @csrf
                    <div class="col-md-4 col-md-offset-4" style="margin-bottom:50px">
                    <div class="form-group">
                        <label class="control-label">Name on Card</label>
                        <input type="text" class="form-control" name="name" required title="Enter name">
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="control-label">Card Number</label>
                        <input type="text" class="form-control" name="number" required title="Enter 16 digit card number">
                    </div>
                    <br>      
                    <div class="form-group">
                        <label class="control-label">Expiration date</label>
                        <input type="date" class="form-control" name="date" required title="Enter Expiration date">
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="control-label">CVV</label>
                        <input type="text" class="form-control" name="cvv" required title="Enter CVV">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" value="Make Payment" style="padding: 3px!important; text-aligh:center; font-size:15px; background-color: #112D32; border-radius:7px; border-color: #88BDBC; color:white;">
                </form>
                <br>
                &nbsp;
            </div>
        </div>
    </div>
</div>
