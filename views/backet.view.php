<h2 align="center"> Ваш товар успішно додано до корзини</h2>
     <p align="center">
     <a href="/order">Перейти до корзини</a>
   
     </p>
<form action="" method="post" id="cart-form">

<table id="mycart" align="center" cellspacing="10" cellpadding="10" border="10">
      <tr>
          <th>Товар</th>
            <th>Цена</th>
            <th>Кол-во</th>
            <th>Всего</th>
      </tr>

      <tr>
       <?php
         $totalPrice = 0;
        foreach( $_SESSION['basket'] as $productId ) {
   $product = sql($db, "SELECT * FROM `products` WHERE `id` = $productId", 
    [],  'rows'  );
    echo "<tr>";
       echo "<td>"  .$product[0]['title']. "</td>";
        echo "<td>".$product[0]['price']. "</td>";
        // echo "<td>".$_SESSION['basket'][$product[0]['id']]."</td>";
        $totalPrice += $product[0]['price'];
           // echo "total price: ".$totalPrice;
       } ?>

          <td align="center"><input type="text" size="2" name="" maxlength="2" value="" /></td>
          <td align="center"></td>
           
      </tr>
</table>  

     <p class="total" align="center">Общая сумма заказа: <span class="product-price"><? echo "total price: ".$totalPrice; ?></span></p>
     <p align="center">
     <input type="submit" name="update" value="Оформити замовлення" />
     </p>
    
</form>