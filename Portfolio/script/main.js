$(document).ready(function(){

    var scrollLink = $('.scroll');

    //Smooth scrolling
    scrollLink.click(function(e){
      e.preventDefault();
      $('body, html').animate({
        scrollTop: $(this.hash).offset().top
      });
    });
  });

    $(window).scroll(function() {
      var loc = $(this).scrollTop();
      $(".scroll").each(function(){
        var offset = $(this.hash).offset().top - 1;

        if(offset <= loc) {
          $(this).parent().addClass("active");
          $(this).parent().siblings().removeClass("active");
        }
      });
    });

// Modaal venster
  var modal = document.getElementById('myModal');
  var btn = document.getElementById("myBtn");
  var span = document.getElementsByClassName("close")[0];

  btn.onclick = function() {
      modal.style.display = "block";
  }

  span.onclick = function() {
      modal.style.display = "none";
  }

  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }

// Modaal venster 2
  var modal2 = document.getElementById('myModal2');
  var btn2 = document.getElementById("myBtn2");
  var span2 = document.getElementsByClassName("close2")[0];

  btn2.onclick = function() {
      modal2.style.display = "block";
  }

  span2.onclick = function() {
      modal2.style.display = "none";
  }

  window.onclick = function(event) {
      if (event.target == modal2) {
          modal2.style.display = "none";
      }
  }

// Modaal venster 3
  var modal3 = document.getElementById('myModal3');
  var btn3 = document.getElementById("myBtn3");
  var span3 = document.getElementsByClassName("close3")[0];

  btn3.onclick = function() {
      modal3.style.display = "block";
  }

  span3.onclick = function() {
      modal3.style.display = "none";
  }

  window.onclick = function(event) {
      if (event.target == modal3) {
          modal3.style.display = "none";
      }
  }
