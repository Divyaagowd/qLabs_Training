function myFunction() {
  var x = document.getElementById("name").value;
  var y = document.getElementById("name1").value;
  var z = document.getElementById("name2").value;
  res =(x*x)+(y*y)+(z*z)+(2*x*y)+(2*y*z)+(2*x*z);
  alert(res);
}
