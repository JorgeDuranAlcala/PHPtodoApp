<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MySql and PHP app</title>
	<link rel="stylesheet" href="./css/styles.css" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.container section:nth-of-type(1) {
			flex-direction: column;
		}
		.alert {
			width: 60%;
    		height: 40px;
			text-align: center;
			margin-bottom: 4.5vmin;
			display: flex;
			justify-content: center;
			align-items: center;
			padding: 5px 15px;
			color:#fff;
			opacity: 0.7;
			border-radius: 20px;
			position: relative;
		}

		.alert a i {
			position: absolute;
			right: 15px;
			bottom: 12px;
			color: #fff;
		}
		
		.alert-danger {
			background-color: rgba(246, 4, 4, 0.8);
		}
		
		.alert-success {
			background-color: rgb(9, 211, 36);
		}
		.alert-update {
			background-color: rgb(7, 77, 241);
		}

		.d-none {
			display: none;
		}

		
	</style>
</head>
<body>