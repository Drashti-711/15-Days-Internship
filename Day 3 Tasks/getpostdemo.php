<html>
	<body>
		<h1>Form Demo</h1>
			<form action="process.php" method="POST"> <!-- bydefault it takes get method -->
			<table>
				<tr>
					<td>Name :</td>
					<td><input type="name" name="name"></td>
				</tr>
				<tr>
					<td>Age :</td>
					<td><input type="text" name="age"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit"></td>
				</tr>
			</table>
		</form>
	</body>
</html>