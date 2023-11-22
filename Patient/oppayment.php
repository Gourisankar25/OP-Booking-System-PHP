<!DOCTYPE html>
<html>
<head>
  <title>Payment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/payment.css">
  
</head>
<body>

  <main class="page payment-page">
    <section class="payment-form dark" >
      <div class="container" style="color:white; text-align: center;">
        <div class="block-heading">
          <h2>Payment Wallet</h2>
        </div>
        <form action="oppaymentaction.php" method="post">
          <div class="card-details">
            <h3 class="title" >Credit Card Details</h3>
            <div class="row">
            <div class="form-group col-sm-7">
                <label for="card-holder">Amount to pay</label>
                <input id="card-holder" type="text" class="form-control" placeholder="Amount to pay" value="250" name="amounttopay"aria-label="Card Holder" aria-describedby="basic-addon1" readonly>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-sm-7">
                <label for="card-holder">Card Holder</label>
                <input id="card-holder" type="text" class="form-control" placeholder="Card Holder" name="holdername" aria-label="Card Holder" aria-describedby="basic-addon1">
              </div>
              <div class="form-group col-sm-5">
                <label for="">Expiration Date</label>
                <div class="input-group expiration-date">
                  <input type="text" class="form-control" placeholder="MM" aria-label="MM" name="" aria-describedby="basic-addon1">
                  <span class="date-separator">/</span>
                  <input type="text" class="form-control" placeholder="YY" aria-label="YY" aria-describedby="basic-addon1">
                </div>
              </div>
              <div class="form-group col-sm-8">
                <label for="card-number">Card Number</label>
                <input id="card-number" type="text" class="form-control" placeholder="Card Number" aria-label="Card Holder" aria-describedby="basic-addon1">
              </div>
              <div class="form-group col-sm-4">
                <label for="cvc">CVC</label>
                <input id="cvc" type="text" class="form-control" placeholder="CVC" aria-label="Card Holder" aria-describedby="basic-addon1">
              </div>
              <div class="form-group col-sm-12">
                <button type="submit" class="btn btn-success btn-block">Proceed</button>
                <a href="mybooking.php"><button type="button" class="btn btn-primary btn-block">Back to Booking</button></a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
  </main>
  
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
