<html>
    <head>
        <title>Subcategories</title>

        <link rel="stylesheet" href="../css/layout.css"> 
    </head>
    <body class="subcategories">
        
        <form method="post" action="process_subcategories.php">
            <div style="position: absolute; left:450px; top: 20px;">
            <h1>SUBCATEGORIES <span>FORM</span></h1>
            <fieldset class="fieldset1">
                <ul>
                        <li><label for="id"> ADD SUBCATEGORY ID : </label>
                        <input type="id" id="id" name="subcategory_id"></li><br>
   
                        <li><label for="name">ADD SUBCATEGORY NAME :</label>
                        <input type="name" id="name" name="subcategory_name"></li><br>

                        <li><label for="id"> ADD CATEGORY ID : </label>
                        <input type="id" id="id" name="category_id"></li><br>

                        <li><label for="id"> PRICE : </label>
                        <input type="price" id="price" name="price"></li><br>

                        <li><label for="name">IS DELETED :</label>
                        <input type="del" id="del" name="is_deleted"></li><br>


            <li><input type="SUBMIT" id="sbmt" class="button"/></li><br>

            <p>Don't have a subcategory? ADD CATEGORY.<a href="http://localhost/Ecommerce_Website/php/categories.php">ADD HERE</a>.</p>
			
			 <a href="http://localhost/Ecommerce_Website/php/home.php">HOME</a>
    
                </ul>
            </fieldset>
            </div>
        </form>

    </body>
</html>