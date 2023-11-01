<?php include '../view/header.php'; ?>
<main>

    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>        
        <?php 
        $categories = get_categories();
        foreach($categories as $ct) : ?>
            <tr>
            <td><?php echo $ct['categoryName']; ?></td>
                <td>
                    <form action="." method="post">
                        <input type="hidden" name="categoryID" value="<?php echo $ct['categoryID']?>">
                        <input type="hidden" name="action" value="delete_category">
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
            <?php endforeach?>
    </table>

    <h2>Add Category</h2>
    <label>Name</label>
    <form action="." method="post">
    <input type="text" name="categoryName">
    <input type="hidden" name="action" value="add_category">
    <input type="submit" value="Add" > 
    </form>
    <p><a href="index.php?action=list_products">List Products</a></p>

</main>
<?php include '../view/footer.php'; ?>