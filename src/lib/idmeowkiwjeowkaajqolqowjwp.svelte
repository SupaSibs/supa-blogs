<script>
let code;
  let password;
console.log("hii")
    function submitHandler(){
    console.log("Handling submit")
    event.preventDefault()
    const form = event.target;
    
      console.log(password)
   // if (password = "ramicom"){ 
  //  this.pass = "correct!"
     // console.log("hello")
     //   } 
}
</script>

<form on:submit={submitHandler}>
  <label for="code" id="lcode">Code:</label>
  <textarea id="code" name="code" rows="5" cols="100" bind:this={code}></textarea><br>
  <label for="pass" id="lpass">Password:</label>
  <input type="text" id="pass" name="pass" bind:this={password}><br><br>
  <input type="submit" value="Submit">
</form>