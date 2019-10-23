</div>
    <div class="content">
        <div class="wrap">
            <div class="content-top">
                <h3>Payment</h3>
                <form action="bank.php" method="post" id="form1">
                    <div class="col-md-4 col-md-offset-4" style="margin-bottom:50px">
                    <div class="form-group">
                        <label class="control-label">Name on Card</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Card Number</label>
                        <input type="text" class="form-control" name="number" required title="Enter 16 digit card number">
                    </div>      
                    <div class="form-group">
                        <label class="control-label">Expiration date</label>
                        <input type="date" class="form-control" name="date">
                    </div>
                    <div class="form-group">
                        <label class="control-label">CVV</label>
                        <input type="text" class="form-control" name="cvv">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Make Payment</button>
                </form>
            </div>
        </div>
    </div>
</div>
