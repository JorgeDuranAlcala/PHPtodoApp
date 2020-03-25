<?php
	include "Car.php";
	include "db.php";
?>

<?php include('includes/header.php'); ?>

<?php include('add_todo.php'); ?>

	<div class="container">
		<section>
			<?php if(isset($_SESSION['message'])) {?>
				<div class="alert alert-<?= $_SESSION['message_type'] ?> <?= $_SESSION['d-none'] ?>" id="alert">
					<span>
						<?= $_SESSION['message']?>
					</span>
					<a href="delete_alert.php?close=d-none">
						<i class="fa fa-close" id="close" name="close"></i>
					</a>
				</div>
			<?php session_unset(); }?>
			<div class="card">
				<h3>Add a new Todo</h3>
				<form method="POST" action="add_todo.php">
					<div class="fields">
						<input type="text" name="title" id="input1" placeholder="Enter a titulo">
						<input type="text" name="description" id="input2" placeholder="Enter a description">
						<button type="submit"> 
							Submit
						</button>
					</div>
				</form>
			</div>
		</section>
		<section>
			<h3>All Todos</h3>
			<div class="todo_list">
				<?php
				$query = " SELECT * FROM todo ";
				
				$array_todos = mysqli_query($conn, $query);
				
				while ( $row = mysqli_fetch_array($array_todos) ) { ?>
					<div class="todo">
						<h4><?php echo $row['title']?></h4>
						<p><?php echo $row['description']?></p>
							<a href="delete_todo.php?id=<?php echo $row['id'] ?>">
								<i class="fa fa-trash"></i>
							</a>
							<a href="edit_todo.php?id=<?php echo $row['id'] ?>">
								<i class="fa fa-pencil"></i>
							</a>
						</div>
				<?php } ?>
				
			</div>
		</section>
	</div>

	<?php include('includes/footer.php') ?>
	