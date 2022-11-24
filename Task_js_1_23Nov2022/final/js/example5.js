function myFunction() {
  var a = document.getElementById("name").value;
  var b = document.getElementById("name1").value;
  res =
    (a * a * a * a) +
    (4 * a * a * a * b) +
    (6 * a * a * b * b) +
    (4 * a * b * b * b)+
    (b * b * b * b);
  alert(res);
}
