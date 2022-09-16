<script>

console.log("hii")
    function submitHandler(){
    console.log("Handling submit")
    event.preventDefault()
    const form = event.target;
    let code = form.getElementById("lcode").getElementById("code").input; 
    let password = form.getElementById("lpass").getElementById("pass").input;
    if (password = "rami.com123"){ 
   console.log(passkey);
    pass = "correct!"
        } 
}
</script>

<form on:submit={submitHandler}>
  <label for="code" id="lcode">Code:</label>
  <textarea id="code" name="code" rows="5" cols="100"></textarea><br>
  <label for="pass" id="lpass">Password:</label>
  <input type="text" id="pass" name="pass"><br><br>
  <input type="submit" value="Submit">
</form>