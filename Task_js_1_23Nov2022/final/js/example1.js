function add() {
  var a = document.getElementById("name").value;
  var b = document.getElementById("name1").value;
  res = (a * a * a) + (3 * a * a * b) + (3 * a * b * b)+ (b * b * b);
  alert(res);
}
