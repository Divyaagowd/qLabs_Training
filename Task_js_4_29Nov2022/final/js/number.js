function calculate() {
    var a=0
    res = 0;
    n = parseInt(document.getElementById("enter").value);
    b = n;
    var total=" ";
   while (n != 0) {
     var length= n.length;
     for(var i=0; i<=length; i++){

     }
      
      switch (a) {
        case 0:
          res = "0";
          break;
        case 1:
          res ="1";
          break;
        case 2:
          res = "2";
          break;
        case 3:
          res = "3";
          break;
        case 4:
          res =  "4";
          break;
        case 5:
          res = "5";
          break;
        case 6:
          res ="6";
          break;
        case 7:
          res ="7";
          break;
        case 8:
          res = "8";
          break;
        case 9:
          res = "9";
          break;
        case 10:
          res = "10";
          break;
        default:
          res = "not a valid number";
          break;
      }
          total=res+" "+total;
          console.log(total);
    }
    document.getElementById("number").innerHTML=total;
  }
  