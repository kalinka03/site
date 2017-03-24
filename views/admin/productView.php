<div class="create">
<p><a href="/admin/product?method=create">Створити продукт</a></p> 
</div>

 <table style="border-collapse: collapse;"> 
  
    <?php 
     $k=0;
     foreach( $data as $key=> $res) { ?>
    
      <?php $k++; ?> 

  <tr  style="border-collapse: collapse;">
            <td style="border: solid 1px black; padding: 10px">
                <?= $k ?>
            </td>
            <td style="border: solid 1px black;  padding: 10px">
                <?= $res['title'] ?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <?= $res['description'] ?>
            </td>
             <td style="border: solid 1px black; padding: 10px">
                <?= $res['price'] ?>
            </td>
              <td style="border: solid 1px black; padding: 10px">
                <?= $res['category_id'] ?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <a href="/admin/product?method=edit&id=<?=$res['id']?>">Редагувати</a>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <a href="/admin/produc?method=delete&id=<?=$res['id']?>">Видалити</a>
            </td>
        </tr>
    <?php } ?>

</table>  