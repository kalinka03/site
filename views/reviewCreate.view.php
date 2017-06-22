<center>


    <form action="/review/?method2=insert" method="POST">


     <!--  <input type="text" placeholder="<?php  echo $_SESSION['user'];  ?>" name="insert[user_name]" value=" "><br/> -->
     <select  style="width:150px" name="form[product_id]" id="">
        <option>Виберіть товар</option>

        <?php 
        foreach ($data['product'] as $key => $product){
            ?>

            <option value="<?=$product['id']?>"> 
                <?=$product['title']?>
            </option>
            <?php
        }
        ?>
    </select>
    
    <br>
    <br>
    
    <p><textarea  style="width:250px"   placeholder="Відгук"  name="form[text_review]"></textarea></p>


    <br/>
    <br>

    <button type="submit">Додати відгук</button>
</form>

</center>
