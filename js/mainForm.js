window.onload = function() {
    var ball=document.getElementById("ball");
    var f=document.getElementById("formWrapper");
    var l=document.getElementById("logo");
    var h=document.getElementById("headline");
    setTimeout(()=> {
    ball.style.visibility="hidden";
    f.style.visibility="visible"; 
    l.style.display="block";
    l.style.width="320px";
    l.style.marginLeft= "auto";
    l.style.marginRight="auto";
    l.style.marginRight="auto";
    l.style.marginTop="auto";

    h.style.visibility="visible";
    }, 3000)
    f.style.display="block";
    f.style.marginLeft= "auto";
    f.style.marginRight="auto";
  };