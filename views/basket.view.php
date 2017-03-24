<h2 align="center"> Товари в корзині</h2>

<table id="mycart" align="center" cellspacing="10" cellpadding="10" border="10">
  <tr>
    <th>Товар</th>
    <th>Цена</th>
    <th>Загальна сума покупки</th>
    <th>Загальна кількість</th>
  </tr>

  <?php
  $i = 0;
  $totalprice = 0;
  if(!empty($_SESSION['basket'])){
    foreach( $data['products'] as $product) {
      $i++;
      echo "<tr>";
      echo "<td>"  .$product[0]['title']. "</td>";
      echo "<td>".$product[0]['price']."грн". "</td>";
      $totalprice += $product[0]['price'];
    }
    
    echo "<td>"  . $totalprice ." "."грн" . "</td>";
    echo "<td>"  .  $i . "</td>";

    ?>
  </table>
  <br> </br>
  <center> 
    <form  method='post'>
      <input type="hidden" name="clear_basket" value=1>
      <button type="submit" >Очистити корзину</button >
      </form>
    </center> 
    <div> 
      <center>
        <form  method='post' action="/order">
          <div class="form-group">
            <input  name='name' type="text" class="size_input" class="form-control"   placeholder="Ваше Імя" value=""> 
          </div>
          <div class="form-group">
            <input name='surname' type="text"  class="size_input" class="form-control"  placeholder="Ваше прізвище" value=""> 
          </div>
          <div class="form-group">
            <input  name='adress' type="text"  class="size_input" class="form-control"  placeholder="Адреса доставки" value="">
          </div>
          <div class="form-group">
            <input  name='telefone' type="text"  class="size_input" class="form-control"  placeholder="Номер телефона" value="">
          </div>
          <button type="submit" >Зробити замовлення</button >
          </form>
        </center>
      </div>   
      <?php
    }
    ?>
































<!-- <h2 align="center"> Товари в корзині</h2>

<table id="mycart" align="center" cellspacing="10" cellpadding="10" border="10">
      <tr>
          <th>Товар</th>
            <th>Цена</th>
             <th>Загальна сума покупки</th>
             <th>Загальна кількість</th>
           </tr> -->

<!-- <?php
$i = 0;
$totalprice = 0;
if(!empty($_SESSION['basket'])){
  foreach( $data['products'] as $product) {
    $i++;
   echo "<tr>";
  echo "<td>"  .$product[0]['title']. "</td>";
  echo "<td>".$product[0]['price']."грн". "</td>";

  // echo "<td>".$_SESSION['basket'][$product[0]['id']]."</td>";
    $totalprice += $product[0]['price'];

}

 echo "<td>"  . $totalprice ." "."грн" . "</td>";
  echo "<td>"  .  $i . "</td>";
?>

      </tr>
    </table>   -->

   <!-- <div> 
    <form  align="center method='post'>
      <input type="hidden" name="clear_basket" value=1>
      <button align="center type="submit" >Очистити корзину</button >
      </form>
    </div> 
  <div> 
    <form  method='post' action="/order">
      <div class="form-group">
                  <input  align="center name='name' type="text" class="form-control"  placeholder="Ваше Імя" value=""> 
                </div>
                <div class="form-group">
                  <input  align="center name='surname' type="text" class="form-control"  placeholder="Ваше прізвище" value=""> 
                </div>
                <div class="form-group">
                  <input align="center  name='adress' type="text" class="form-control"  placeholder="Адреса доставки" value="">
                </div>
      <button  align="center type="submit" >Зробити замовлення</button >
      </form>
    </div>   
    <?php
  }
  ?> -->