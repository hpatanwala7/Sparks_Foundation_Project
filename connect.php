<?php
$Name = filter_input(INPUT_POST, 'Name');
$Account_Number = filter_input(INPUT_POST, 'Account_Number');
$Amount = filter_input(INPUT_POST, 'Amount');
$Transaction_ID = filter_input(INPUT_POST, 'Transaction_ID');

if (!empty($Name)){
	if (!empty($Account_Number)){
		if (!empty($Amount)){
			if (!empty($Amount)){
				// Variable Part
				$host = "localhost";
				$dbusername = "root";
				$dbpassword = "";
				$dbname = "room_book";
					
						// Create connection
						$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

						// Check Connection
						if (mysqli_connect_error()){
							die('Connect Error ('. mysqli_connect_errno() .') '
							. mysqli_connect_error());
						}
						else{
							$sql = "INSERT INTO details (Name, Account_Number, Amount, Transaction_ID)
							values ('$Name', '$Account_Number', '$Amount', '$Transaction_ID')";
							if ($conn->query($sql)){
								echo "New record is inserted sucessfully";
							}
							else{
								echo "Error: ". $sql ."
								". $conn->error;
							}
							$conn->close();
						}
					}

					else{
						echo "Transaction_ID should not be empty";
						die();
					}
				}
				else{
					echo "Amount should not be empty";
					die();
				}

			}
			else{
				echo "Account_Number should not be empty";
				die();
			}
		}
		else{
			echo "Name should not be empty";
			die();
		}	
?>