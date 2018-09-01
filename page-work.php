<?php
/*Template Name: Work With Us */

get_header(); ?>

<div class="work-grid">
  <div class="work-top-space"></div>

  <h1 class="work-title">Work With Us</h1>

  <p class="work-paragraph-1">Lorem ipsum dolor amet locavore put a bird on it iceland art party kale chips pinterest. Deep v four loko raw denim pinterest blue bottle air plant. Banh mi chartreuse man bun fingerstache meh retro vice tumblr. Bitters swag bicycle rights tote bag farm-to-table, pok pok small batch waistcoat fingerstache stumptown ethical occupy snackwave. Bespoke vice hashtag, single-origin coffee ennui meggings succulents keytar pop-up venmo butcher salvia. Schlitz dreamcatcher chia, sriracha taxidermy cold-pressed brooklyn subway tile messenger bag salvia.</p>

  <p class="work-paragraph-2">Heirloom knausgaard cred leggings pickled photo booth flannel neutra, tattooed vinyl listicle hexagon semiotics. Ramps 8-bit offal, try-hard vegan freegan yr. 90's vegan copper mug humblebrag yr YOLO poutine raclette williamsburg tumeric. Brooklyn master cleanse cold-pressed, retro pok pok cardigan lo-fi lyft shaman.</p>

  <img class="work-pic-1" src="<?php bloginfo('stylesheet_directory'); ?>/images/Both-TogetherBlur.png" alt="">

  <p class="work-paragraph-3">Meditation XOXO tbh twee authentic copper mug humblebrag iceland ennui taiyaki. Knausgaard roof party gastropub waistcoat. Vegan dreamcatcher woke, art party forage microdosing ennui sartorial organic synth put a bird on it brooklyn meditation chillwave vexillologist. Edison bulb pok pok literally, VHS actually tote bag authentic church-key biodiesel trust fund forage single-origin coffee selvage portland. Austin gentrify fanny pack viral, blue bottle chartreuse health goth disrupt activated charcoal subway tile stumptown brunch. Austin celiac pitchfork small batch jianbing. Forage direct trade tote bag, fixie bushwick pug next level twee farm-to-table church-key pour-over fingerstache letterpress intelligentsia disrupt.</p>

  <img class="work-pic-2" src="<?php bloginfo('stylesheet_directory'); ?>/images/Both-TogetherBlur.png" alt="">

  <p class="work-paragraph-4">Tousled etsy chillwave, trust fund pop-up brunch coloring book banh mi blue bottle tofu tattooed retro pork belly single-origin coffee polaroid. Blue bottle austin coloring book tumblr. Knausgaard pok pok +1, blue bottle cronut kale chips pork belly franzen kickstarter hoodie vexillologist sartorial. Lyft live-edge put a bird on it normcore banh mi, kinfolk hexagon cliche salvia PBR&B forage cardigan tattooed XOXO freegan. Ugh fingerstache leggings la croix air plant enamel pin cold-pressed kinfolk food truck salvia jianbing flexitarian. Portland microdosing iceland, banh mi lyft fam butcher copper mug poutine prism chartreuse godard typewriter iPhone. Green juice food truck migas, biodiesel enamel pin artisan brunch cloud bread retro selvage pok pok kitsch letterpress synth fanny pack.

Oh. You need a little dummy text for your mockup? How quaint.

I bet you’re still using Bootstrap too…</p>
</div>


<div class="packages">
<h1 class="packages-title">Packages</h1>
<p class="package-1">Buy a package of 4 Sessions for $3,500 ($875/hr)</p>
<div class="button-container-1">
  <div class="button-1" id="paypal-button-1"></div>
</div>

<p class="package-2">Buy a Package of 10 Sessions for $7,500 ($750/hr)</p>

<div class="button-container-2">
  <div class="button-2" id="paypal-button-2"></div>
</div>

<p class="package-3">Sign up for 6 months of Coaching on Contract 1-2x/2weeks 18 sessions for $11,250 ($625/hr)</p>

<div class="button-container-3">
  <div class="button-3" id="paypal-button-3"></div>
</div>

<p class="package-4">Sign up for 12 months on Contract 1-2x/2weeks 30 sessions for $15,000 ($500/hr)</p>

<div class="button-container-4">
  <div class="button-4" id="paypal-button-4"></div>
</div>

<p class="package-5">Sign up for 24 months on Contract 1-2x/2weeks for 60 sessions for $24,000 ($400/hr)</p>

<div class="button-container-5">
  <div class="button-5" id="paypal-button-5"></div>
</div>

</div>


<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
paypal.Button.render({
  // Configure environment
  env: 'production',
  client: {
    sandbox: 'AQddee-PdgGxiSK5hGM_Rs2CFHYp-4vB1aUf7hN-DS3QVAXKujCpS-GEefA1scbqeUoROFzy9ipwPU_a',
    production: 'AZ8wx1gYPArZnVG6Emd2hZ-rtnzsUQaLW3UFFkwCx9tXtC5v52sn_VE-_5Plmidqwn1SEYJX20dla-AU'
  },
  // Customize button (optional)
  locale: 'en_US',
  style: {
    size: 'small',
    color: 'gold',
    shape: 'pill',
  },
  // Set up a payment
  payment: function (data, actions) {
    return actions.payment.create({
      transactions: [{
        amount: {
          total: '3,500.00',
          currency: 'USD'
        }
      }]
    });
  },
  // Execute the payment
  onAuthorize: function (data, actions) {
    return actions.payment.execute()
      .then(function () {
        // Show a confirmation message to the buyer
        window.alert('Thank you for your purchase!');
      });
  }
}, '#paypal-button-1');

paypal.Button.render({
  // Configure environment
  env: 'production',
  client: {
    sandbox: 'AQddee-PdgGxiSK5hGM_Rs2CFHYp-4vB1aUf7hN-DS3QVAXKujCpS-GEefA1scbqeUoROFzy9ipwPU_a',
    production: 'AZ8wx1gYPArZnVG6Emd2hZ-rtnzsUQaLW3UFFkwCx9tXtC5v52sn_VE-_5Plmidqwn1SEYJX20dla-AU'
  },
  // Customize button (optional)
  locale: 'en_US',
  style: {
    size: 'small',
    color: 'gold',
    shape: 'pill',
  },
  // Set up a payment
  payment: function (data, actions) {
    return actions.payment.create({
      transactions: [{
        amount: {
          total: '7,500.00',
          currency: 'USD'
        }
      }]
    });
  },
  // Execute the payment
  onAuthorize: function (data, actions) {
    return actions.payment.execute()
      .then(function () {
        // Show a confirmation message to the buyer
        window.alert('Thank you for your purchase!');
      });
  }
}, '#paypal-button-2');

paypal.Button.render({
  // Configure environment
  env: 'production',
  client: {
    sandbox: 'AQddee-PdgGxiSK5hGM_Rs2CFHYp-4vB1aUf7hN-DS3QVAXKujCpS-GEefA1scbqeUoROFzy9ipwPU_a',
    production: 'AZ8wx1gYPArZnVG6Emd2hZ-rtnzsUQaLW3UFFkwCx9tXtC5v52sn_VE-_5Plmidqwn1SEYJX20dla-AU'
  },
  // Customize button (optional)
  locale: 'en_US',
  style: {
    size: 'small',
    color: 'gold',
    shape: 'pill',
  },
  // Set up a payment
  payment: function (data, actions) {
    return actions.payment.create({
      transactions: [{
        amount: {
          total: '11,250.00',
          currency: 'USD'
        }
      }]
    });
  },
  // Execute the payment
  onAuthorize: function (data, actions) {
    return actions.payment.execute()
      .then(function () {
        // Show a confirmation message to the buyer
        window.alert('Thank you for your purchase!');
      });
  }
}, '#paypal-button-3');

paypal.Button.render({
  // Configure environment
  env: 'production',
  client: {
    sandbox: 'AQddee-PdgGxiSK5hGM_Rs2CFHYp-4vB1aUf7hN-DS3QVAXKujCpS-GEefA1scbqeUoROFzy9ipwPU_a',
    production: 'AZ8wx1gYPArZnVG6Emd2hZ-rtnzsUQaLW3UFFkwCx9tXtC5v52sn_VE-_5Plmidqwn1SEYJX20dla-AU'
  },
  // Customize button (optional)
  locale: 'en_US',
  style: {
    size: 'small',
    color: 'gold',
    shape: 'pill',
  },
  // Set up a payment
  payment: function (data, actions) {
    return actions.payment.create({
      transactions: [{
        amount: {
          total: '15,000.00',
          currency: 'USD'
        }
      }]
    });
  },
  // Execute the payment
  onAuthorize: function (data, actions) {
    return actions.payment.execute()
      .then(function () {
        // Show a confirmation message to the buyer
        window.alert('Thank you for your purchase!');
      });
  }
}, '#paypal-button-4');

paypal.Button.render({
  // Configure environment
  env: 'production',
  client: {
    sandbox: 'AQddee-PdgGxiSK5hGM_Rs2CFHYp-4vB1aUf7hN-DS3QVAXKujCpS-GEefA1scbqeUoROFzy9ipwPU_a',
    production: 'AZ8wx1gYPArZnVG6Emd2hZ-rtnzsUQaLW3UFFkwCx9tXtC5v52sn_VE-_5Plmidqwn1SEYJX20dla-AU'
  },
  // Customize button (optional)
  locale: 'en_US',
  style: {
    size: 'small',
    color: 'gold',
    shape: 'pill',
  },
  // Set up a payment
  payment: function (data, actions) {
    return actions.payment.create({
      transactions: [{
        amount: {
          total: '24,000.00',
          currency: 'USD'
        }
      }]
    });
  },
  // Execute the payment
  onAuthorize: function (data, actions) {
    return actions.payment.execute()
      .then(function () {
        // Show a confirmation message to the buyer
        window.alert('Thank you for your purchase!');
      });
  }
}, '#paypal-button-5');
</script>

<?php get_footer; ?>
