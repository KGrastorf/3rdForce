jQuery(document).ready(function() {
  jQuery(this).scrollTop(0);
});



var container = document.getElementsByTagName('homeAe');

var animData = {
  container: container,
  renderer: 'svg',
  autoplay: true,
  loop: false,
  path: 'data.json'
};

jQuery(document).ready(function() {
  //Magic Scroll
  var controller = new ScrollMagic.Controller();

  var testScene1 = new ScrollMagic.Scene({
      triggerElement: '.test-pic-1',
      triggerHook: .6
    })
    .setClassToggle('.test-pic-1', 'fade-in')
    .addTo(controller);

  var testScene1a = new ScrollMagic.Scene({
      triggerElement: '.test-1',
      triggerHook: .8
    })
    .setClassToggle('.test-1', 'fade-in')
    .addTo(controller);

  var testScene1b = new ScrollMagic.Scene({
      triggerElement: '.test-1-name',
      triggerHook: .7
    })
    .setClassToggle('.test-1-name', 'fade-in')
    .addTo(controller);

  var testScene2 = new ScrollMagic.Scene({
      triggerElement: '.test-pic-2',
      triggerHook: .6
    })
    .setClassToggle('.test-pic-2', 'fade-in')
    .addTo(controller);

  var testScene2a = new ScrollMagic.Scene({
      triggerElement: '.test-2',
      triggerHook: .8
    })
    .setClassToggle('.test-2', 'fade-in')
    .addTo(controller);

  var testScene2b = new ScrollMagic.Scene({
      triggerElement: '.test-2-name',
      triggerHook: .7
    })
    .setClassToggle('.test-2-name', 'fade-in')
    .addTo(controller);


  var testScene3 = new ScrollMagic.Scene({
      triggerElement: '.test-pic-3',
      triggerHook: .6
    })
    .setClassToggle('.test-pic-3', 'fade-in')
    .addTo(controller);

  var testScene3a = new ScrollMagic.Scene({
      triggerElement: '.test-3',
      triggerHook: .8
    })
    .setClassToggle('.test-3', 'fade-in')
    .addTo(controller);

  var testScene3b = new ScrollMagic.Scene({
      triggerElement: '.test-3-name',
      triggerHook: .7
    })
    .setClassToggle('.test-3-name', 'fade-in')
    .addTo(controller);

    var testScene4 = new ScrollMagic.Scene({
        triggerElement: '.test-pic-4',
        triggerHook: .6
      })
      .setClassToggle('.test-pic-4', 'fade-in')
      .addTo(controller);

    var testScene4a = new ScrollMagic.Scene({
        triggerElement: '.test-4',
        triggerHook: .8
      })
      .setClassToggle('.test-4', 'fade-in')
      .addTo(controller);

    var testScene4b = new ScrollMagic.Scene({
        triggerElement: '.test-4-name',
        triggerHook: .7
      })
      .setClassToggle('.test-4-name', 'fade-in')
      .addTo(controller);

    var testScene5 = new ScrollMagic.Scene({
        triggerElement: '.test-pic-5',
        triggerHook: .6
      })
      .setClassToggle('.test-pic-5', 'fade-in')
      .addTo(controller);

    var testScene5a = new ScrollMagic.Scene({
        triggerElement: '.test-5',
        triggerHook: .8
      })
      .setClassToggle('.test-5', 'fade-in')
      .addTo(controller);

    var testScene5b = new ScrollMagic.Scene({
        triggerElement: '.test-5-name',
        triggerHook: .7
      })
      .setClassToggle('.test-5-name', 'fade-in')
      .addTo(controller);


    var testScene6 = new ScrollMagic.Scene({
        triggerElement: '.test-pic-6',
        triggerHook: .6
      })
      .setClassToggle('.test-pic-6', 'fade-in')
      .addTo(controller);

    var testScene6a = new ScrollMagic.Scene({
        triggerElement: '.test-6',
        triggerHook: .8
      })
      .setClassToggle('.test-6', 'fade-in')
      .addTo(controller);

    var testScene6b = new ScrollMagic.Scene({
        triggerElement: '.test-6-name',
        triggerHook: .7
      })
      .setClassToggle('.test-6-name', 'fade-in')
      .addTo(controller);

      var testScene7 = new ScrollMagic.Scene({
          triggerElement: '.test-pic-7',
          triggerHook: .6
        })
        .setClassToggle('.test-pic-7', 'fade-in')
        .addTo(controller);

      var testScene7a = new ScrollMagic.Scene({
          triggerElement: '.test-7',
          triggerHook: .8
        })
        .setClassToggle('.test-7', 'fade-in')
        .addTo(controller);

      var testScene7b = new ScrollMagic.Scene({
          triggerElement: '.test-7-name',
          triggerHook: .7
        })
        .setClassToggle('.test-7-name', 'fade-in')
        .addTo(controller);

      var testScene8 = new ScrollMagic.Scene({
          triggerElement: '.test-pic-8',
          triggerHook: .6
        })
        .setClassToggle('.test-pic-8', 'fade-in')
        .addTo(controller);

      var testScene8a = new ScrollMagic.Scene({
          triggerElement: '.test-8',
          triggerHook: .8
        })
        .setClassToggle('.test-8', 'fade-in')
        .addTo(controller);

      var testScene8b = new ScrollMagic.Scene({
          triggerElement: '.test-8-name',
          triggerHook: .7
        })
        .setClassToggle('.test-8-name', 'fade-in')
        .addTo(controller);


      var testScene9 = new ScrollMagic.Scene({
          triggerElement: '.test-pic-9',
          triggerHook: .6
        })
        .setClassToggle('.test-pic-9', 'fade-in')
        .addTo(controller);

      var testScene9a = new ScrollMagic.Scene({
          triggerElement: '.test-9',
          triggerHook: .8
        })
        .setClassToggle('.test-9', 'fade-in')
        .addTo(controller);

      var testScene9b = new ScrollMagic.Scene({
          triggerElement: '.test-9-name',
          triggerHook: .7
        })
        .setClassToggle('.test-9-name', 'fade-in')
        .addTo(controller);





});
