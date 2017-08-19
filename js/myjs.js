$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();

  function play(){
      var audio = document.getElementById("azan2");
      audio.play();
  }

  function stop(){
      var audio = document.getElementById("azan2");
      audio.pause();
  }

  function azanSubuh(){
      var audio = document.getElementById("azan");
      audio.play();
  }

  function maxWin(){
      var el = document.documentElement, rfs = // for newer Webkit and Firefox
         el.requestFullScreen
      || el.webkitRequestFullScreen
      || el.mozRequestFullScreen
      || el.msRequestFullScreen
  ;
      if(typeof rfs!="undefined" && rfs){
          rfs.call(el);
      } else if(typeof window.ActiveXObject!="undefined"){

      // for Internet Explorer
      var wscript = new ActiveXObject("WScript.Shell");
      if (wscript!=null) {
          wscript.SendKeys("{F11}");
      }
      }
  }
});
