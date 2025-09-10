<!DOCTYPE html>
<html>
<body>

<h2>The XMLHttpRequest Object</h2>
<form>
    <input type="text" id="fname">
    <input type="text" id="lname">

</form>
<button type="button" onclick="loadDoc()">Request data</button>

<p id="demo"></p>
 
<script>
function loadDoc() {

    let fname=document.getElementById("fname").value;
    let lname=document.getElementById("lname").value;
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    console.log(this.status);
    document.getElementById("demo").innerHTML = this.responseText;
  }
  xhttp.open("POST", "data.php");
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(`fname=${fname}&lname=${lname}`);
}
</script>

</body>
</html>