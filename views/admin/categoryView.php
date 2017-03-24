<div class="create">
<p><a href="/admin/category?method=create">Створити категорію</a></p> 
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
           <!--  <td style="border: solid 1px black; padding: 10px">
                <?= $user['email'] ?>
            </td> -->
            <td style="border: solid 1px black; padding: 10px">
                <a href="/admin/category?method=edit&id=<?=$res['id']?>">Редагувати</a>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <a href="/admin/category?method=delete&id=<?=$res['id']?>">Видалити</a>
            </td>
        </tr>
    <?php } ?>

</table>  