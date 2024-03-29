/* import sweetalert from 'sweetalert'; */
$('.counting').each(function() {
  var $this = $(this),
    countTo = $this.attr('data-count');
  
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },
  {
    duration: 3000,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }
    });  
});

/* modified code typing effect */
// function([string1, string2],target id,[color1,color2])    
consoleText(['We Can Create', 'We Can Make', 'We Can Code'], 'text',['#ffaf00','#f26659','#1b69d6']);

function consoleText(words, id, colors) {
    if (colors === undefined) colors = ['#fff'];
    var visible = true;
    var con = document.getElementById('console');
    var letterCount = 1;
    var x = 1;
    var waiting = false;
    var target = document.getElementById(id)
    target.setAttribute('style', 'color:' + colors[0])
    window.setInterval(function() {

    if (letterCount === 0 && waiting === false) {
        waiting = true;
        target.innerHTML = words[0].substring(0, letterCount)
        window.setTimeout(function() {
            var usedColor = colors.shift();
            colors.push(usedColor);
            var usedWord = words.shift();
            words.push(usedWord);
            x = 1;
            target.setAttribute('style', 'color:' + colors[0])
            letterCount += x;
            waiting = false;
        }, 900)
    } else if (letterCount === words[0].length + 1 && waiting === false) {
        waiting = true;
        window.setTimeout(function() {
            x = -1;
            letterCount += x;
            waiting = false;
        }, 900)
    } else if (waiting === false) {
        target.innerHTML = words[0].substring(0, letterCount)
        letterCount += x;
    }
    }, 120)
    indow.setInterval(function() {
    if (visible === true) {
        con.className = 'console-underscore hidden'
        visible = false;

    } else {
        con.className = 'console-underscore'

        visible = true;
    }
    }, 300)
}
