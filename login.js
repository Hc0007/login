
  function submit()
  {
    var username=document.getElementById("username").value;
    var password=document.getElementById("password").value;
  if(username=="admin"&& password=="user12345")
  {
      alert("Login Successfully...");
      return false;
  }
  else
  {
      alert("Login Failed incorrent username & password");
      return false;
  }
  }