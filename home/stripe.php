
<script src="https://checkout.stripe.com/checkout.js"></script>
    
    <button id="customButton">Checkout</button>

    <script>
      var stripe = Stripe('pk_live_51MengREekUL6ontJMr1Ha3WrDmgW4plW4FjZfz6ywmkcBc2mOyDXAIZRRUA6s6plPRqD5uGGFGOVFbtfz9vbgEb60019C0r5zt');

      var handler = StripeCheckout.configure({
        key: 'pk_live_51MengREekUL6ontJMr1Ha3WrDmgW4plW4FjZfz6ywmkcBc2mOyDXAIZRRUA6s6plPRqD5uGGFGOVFbtfz9vbgEb60019C0r5zt',
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
          amount: <?php echo $total; ?> // Amount in cents
        });
        e.preventDefault();
      });

      window.addEventListener('popstate', function() {
        handler.close();
      });
    </script>