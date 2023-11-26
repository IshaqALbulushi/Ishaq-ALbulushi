<html>
    <head>
        <title>chapter6</title>
    </head>
    <body>
        <form name= "math" action="/chapter6/math.php"
        method="post" onsubmit="return  confirm('proceed')">

        <label>enter first number</label>
        <br>
        <input type="number " name="num1" min=1 required />
        <br><br>

        <label>enter second number</label>
        <br>
        <input type="number " name="num2" min=1 required />
        <br><br>
        <label>choos the oubut</label>
        <br>
      

      <input list="output" name="output" required>
        <datalist id="output">
         <option value="sum">
         <option value="difference">
         <option value="product">
         <option value="quotient">
        </datalist>


<br><br>
<button type ="submit">submit </button>
<button type ="reset">clear </button>




        </form>
        



    
    </body>
</html
