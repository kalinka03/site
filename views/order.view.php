﻿<?php
 include "views/basket.view.php";

 ?>

<h3> Оформити заказ </h3>







<!-- <form method="post" action="/order">
    <div class="container">
        <table class="table table-bordered table-striped">
            <tr>
                <td>Product</td>
                <td>Price</td>

            </tr>
        <?php
            $totalPrice = 0;
                foreach ($data as $key => $value) {
                    if (isset($value[0]['title'])){
                        echo "<tr>";
                        echo "<td>".$value[0]['title']."</td>";
                        echo "<td>".$value[0]['price']."</td>";
                        $totalPrice += $value[0]['price'];
                        echo "<tr>";
                    }
                }
                echo "</table>";
                echo "<div class='container'><h5>Total price: ".$totalPrice."</h5></div>";
        if (isset($data['loginCheck'])){
            include "layouts/form.php";
        }
        else {
            include "layouts/not_registr.php";
        }
        ?>

   <div class="container">
        <input type="submit" value="Confirm" class="btn btn-default">
   </div>
    </div>
    </form>
 -->


 <!-- <form method="post" action="/order">
    <div class="container">
        <table class="table table-bordered table-striped">
            <tr>
                <td>Product</td>
                <td>Price</td>
                <td>Count</td>
                <td>Delete</td>
            </tr>
        <?php
        $totalPrice = 0;
        // if( $productId){
        //     foreach ($productId as $key => $value) {
        //         echo "<tr>";
                echo "<td>".$product[0]['title']."</td>";
                echo "<td>".$product[0]['price']."</td>";
                // echo "<td>".$_SESSION['backet'][$value['id']]."</td>";
                // echo "<td><a href=/basket?delete=".$value['id'].">X</a>";
                $totalPrice += $$product[0]['price'];
                echo "<tr>";
        //     }
        // }
            echo "</table>";
            echo "total price: ".$totalPrice;
        ?> 

         
        </div>
    </form> -->

<!-- <?php
 include "views/backet.view.php";

 ?>

<h3> Оформити заказ </h3> -->
//<!--  <h2 align="center">Товари в корзині</h2>

// <form action="" method="post" id="cart-form">

// </table>  
// <table id="mycart" align="center" cellspacing="0" cellpadding="0" border="0">
//       <tr>
//           <th>Товар</th>
//             <th>Цена</th>
//             <th>Кол-во</th>
//             <th>Всего</th>
//       </tr>

//       <tr>
//        <?php
//        echo "<td>".$product[0]['title']. "</td>";
//         echo "<td>".$product[0]['price']. "</td>";
//         ?>
//           <td align="center"><input type="text" size="2" name="" maxlength="2" value="" /></td>
//           <td align="center"></td>
//       </tr>
// </table>    
//      <p class="total" align="center">Общая сумма заказа: <span class="product-price">$</span></p>
//      <p align="center">
//      <input type="submit" name="update" value="Оформити замовлення" />
//      </p>
    
// </form> -->