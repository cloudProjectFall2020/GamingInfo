<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
	$results;
	if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)){
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function invalidUid($username) {
	$results;
	if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function invalidEmail($email) {
	$results;
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
	$results;
	if ($pwd !== $pwdRepeat){
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function uidExists($conn, $username, $email) {
	$sql = "SELECT  * FROM users WHERE usersUid = ? OR usersEmail = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) { //Check if sql statment will fail or not
		header("location: ../signup.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "ss", $username, $email);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if($row = mysqli_fetch_assoc($resultData)){
		return $row;
	}
	else {
		$result = false;
		return $result;
	}
	mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $pwd) {
	$sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) { //Check if sql statment will fail or not
		header("location: ../signup.php?error=stmtfailed");
		exit();
	}

	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: ../signup.php?error=none"); //Go back into page
	exit();
}

function emptyInputLogin($username, $pwd) {
	$results;
	if (empty($username) || empty($pwd)){
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function loginUser($conn, $username, $pwd) {
	$uidExists = uidExists($conn, $username, $username);

	if ($uidExists == false){
		header("location: ../login.php?error=wronglogin");
		exit();
	}

	$pwdHashed = $uidExists["usersPwd"];
	$checkPwd = password_verify($pwd, $pwdHashed);

	if ($checkPwd == false){
		header("location: ../login.php?error=wronglogin");
		exit();
	}
	else if ($checkPwd == true) {
		session_start();
		$_SESSION["userid"] =  $uidExists["usersId"];
		$_SESSION["useruid"] =  $uidExists["usersUid"];
		header("location: ../index.php");
		exit();
	}
}

function addGame($conn, $Title, $genre, $date, $favorite) {
	$sql = "INSERT INTO Games (gameName, yearCreated, genre, favorite) VALUES (?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) { //Check if sql statment will fail or not
		header("location: ../form.php?error=stmtfailed");
		exit();
	}


	mysqli_stmt_bind_param($stmt, "sssi", $Title, $genre, $date, $favorite);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: ../form.php?error=none"); //Go back into page
	exit();
}