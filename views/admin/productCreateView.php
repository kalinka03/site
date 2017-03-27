<center>
	

<form action="/admin/product/?method=insert" method="POST">

    <input type="text" placeholder="Введіть назву продукта" name="insert[title]" value=""><br/>
    <input type="text" placeholder="Характеристика продукта" name="insert[description]" value=""><br/>
     <input type="number" placeholder="Ціна продукта" name="insert[price]" value=""><br/>
      <input type="number" placeholder="id категорії" name="insert[category_id]" value=""><br/>
<select name="form[category]" id="">

        <?php foreach( $data['res'] as $category ) { ?>

        <option value="<?=$category['id'] ?>">
            <?=$category['title'] ?>
        </option>

        <?php } ?>

    </select>


      
    <button type="submit">Додати продукт</button>
</form>

</center>