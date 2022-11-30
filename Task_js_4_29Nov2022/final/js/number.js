function calculate() {
  var total="";
     var res = 0;
     var a=0;
    n = (document.getElementById("enter").value);
     var length= n.length;
    //  console.log(length);
     for(var i=0; i<length; i++)
     {
      var a=parseInt(n[i]);
      // console.log(parseInt(a));
      switch (a) {
        case 0:
          res = "zero";
          break;
        case 1:
          res ="one";
          break;
        case 2:
          res = "two";
          break;
        case 3:
          res = "three";
          break;
        case 4:
          res =  "four";
          break;
        case 5:
          res = "five";
          break;
        case 6:
          res ="six";
          break;
        case 7:
          res ="seven";
          break;
        case 8:
          res = "eight";
          break;
        case 9:
          res = "nine";
          break;
        case 10:
          res = "ten";
          break;
        
      }
      total=total+" "+res;
      document.getElementById("number").innerHTML=n;
      document.getElementById("res").innerHTML=total;
      }
          
       
    
   
}

  