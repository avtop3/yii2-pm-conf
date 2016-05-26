$('#members').animateNumber({
        number: 97,
        easing: 'easeInQuad',
        numberStep: function(now, tween) {
          var floored_number = Math.floor(now),
              target = $(tween.elem);
          target.text(floored_number);
        }
      },
      4000
    );