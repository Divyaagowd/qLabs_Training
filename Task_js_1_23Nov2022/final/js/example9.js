function myFunction() {
  var a = document.getElementById("name").value;
  var b = document.getElementById("name1").value;
  res =
    (a * a * a * a * a )-
    (5 * a * a * a * a * b) +
    (10 * a * a * a * b * b) +
    (10 * a * a * b * b * b) +
    (5 * a * b * b * b * b) -
    (b * b * b * b * b);
  alert(res);
}
