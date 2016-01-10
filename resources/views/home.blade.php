<!DOCTYPE html>
<html>
    <head>
        <title>Calculations</title>


        </head>
    <body>
        <div class="container">
            <div class="content">
<a href="{{URL::asset('/')}}">Go Back</a>

<form action="calculations" method="post">
     <input type="hidden" name="_method" value="PUT">
                     {{csrf_field()}}
            
    <label>
Mixed Juice
    </label>
    <br/>
    <input type="text" placeholder="Percent" required name= "c"></input>
    <input type="text" placeholder="Brix" required name="d"></input>
    <input type="text" placeholder="Pol" name="e" required></input>
    <input type="text" placeholder="Purity" name="f" required></input>
    <br/>
  <label>
Clear Juice
    </label>
    <br/>
    <input type="text" required placeholder="Brix" name="g"></input>
    <input type="text" required placeholder="Pol" name="h"></input>
    <input type="text" required placeholder="Purity" name="i"></input>
    <br/>
  
  <label>
Final Molasses
    </label>
</br>
    <input type="text" required placeholder="Percent" name= "j"></input>
    <input type="text" required placeholder="Brix" name="k"></input>
    <input type="text" required placeholder="Pol" name="l"></input>
    <input type="text" required placeholder="Purity" name="m"></input>
    <br/>
  
  <label>
Press Cake
    </label>
    <br/>

    <input type="text" required placeholder="Percent" name= "n"></input>
    <input type="text" required placeholder="Pol" name="o"></input>
    <br/>

<button type="submit">Calculate</button>
</form>              

            </div>
        </div>
    </body>
</html>
