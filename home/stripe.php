<!DOCTYPE html>
<html>
  <head>
    <title>Stripe Pre-built Checkout Form</title>
    <script src="https://checkout.stripe.com/checkout.js"></script>
  </head>
  <body>
    
    <button id="customButton">Purchase</button>

    <script>
      var stripe = Stripe('your_publishable_key');

      var handler = StripeCheckout.configure({
        key: 'your_publishable_key',
        locale: 'auto',
        token: function(token) {
          // You can send the token to your server to process the payment
          // or handle it client-side to complete the payment process.
        }
      });

      document.getElementById('customButton').addEventListener('click', function(e) {
        handler.open({
          name: 'My Store',
          description: 'Product or service description',
          amount: 500 // Amount in cents
        });
        e.preventDefault();
      });

      window.addEventListener('popstate', function() {
        handler.close();
      });
    </script>
  </body>
</html>
