<?php  include("./includes/header.php")  ?>
<div class="cont">
    <div class="card">
        <h3>Update your Todo</h3>
        <form action="edit_todo.php?id=<?php echo($_GET['id']) ?>" method="POST">
            <div class="filds">
                <input type="text" placeholder="Enter a title" name="title">
                <input type="text" placeholder="Enter a description" name="description">
                <button type="submit">Update</button>
            </div>
        </form>
    </div>
</div>
<?php  include("./includes/footer.php")  ?>
