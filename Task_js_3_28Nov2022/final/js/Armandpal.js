
function calculate(){
    var n = parseInt(document.getElementById('name').value);
    var b = n;
    var count=0;
    var a = 0;
    var res = 0;
     var temp= 0;
    while (n != 0) {
      count = count + 1;
      n = parseInt(n / 10);
    }
    n = b;
    while (n != 0) {
      a = n % 10;
      
      temp=parseInt((temp*10)+a);
      res = res + Math.pow(parseInt(a), count);
      document.getElementById('num').innerHTML= b;
      n = parseInt(n / 10);
     
    }
    console.log(temp);
    if (b == res && b == temp) {
        document.getElementById('res').innerHTML=' Its a Armstrong Number and Palindrome';
    }
    else if(temp==b){
        document.getElementById('res').innerHTML=' Its only a Palindrome';
    }
    else if(b == res){
        document.getElementById('res').innerHTML='Its only a Armstrong';
    }
     else {
        document.getElementById('res').innerHTML="Its not a Armstrong Number and palindrome";
    }
    
    }