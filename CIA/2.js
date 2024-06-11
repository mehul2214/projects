var attempt = 3; 
function validate() {
  var first = document.getElementById("first").value;
  var last = document.getElementById("last").value;
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  if (first=="" && last=="" && username =="" && password == "") {
    alert("Please fill the requried details");
    window.location = "1.html";
    return false;
  }
  if (first=="khushal" && last=="goyal" && username =="khushal" && password == "123") {
    alert("Created Account successfully");
    window.location = "1.html";
    return false;
  } 
  if (first=="pratap" && last=="kumar" && username =="pratap" && password == "456") {
    alert("Created Account successfully");
    window.location = "1.html";
    return false;
  } 
  else {
    attempt--; 
    alert("You have left " + attempt + " attempt;");
    if (attempt == 0) {
      document.getElementById("username").disabled = true;
      document.getElementById("password").disabled = true;
      document.getElementById("submit").disabled = true;
      return false;
    }
  }
}
