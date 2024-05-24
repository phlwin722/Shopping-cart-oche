<?php
    session_start();
    // Establish connection to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";
    $email = $_SESSION ['email'];
    $con = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
   
    // Prepare and bind SQL query with parameter
    $sql = "SELECT Product_code, Product_name, Quantity, Price ,Email, Image FROM cart_product WHERE Email = ?" ;
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $email);

    // Execute SQL query
    $stmt->execute();

    // Get result set
    $result = $stmt->get_result();

    // Fetch and store data in an array
    $product_list = array();

    while ($row = $result->fetch_assoc()) {
        $product_list[] = $row;
    }

    // Close statement and connection
    $stmt->close();
    $con->close();

    // Return data in JSON format
    header('Content-Type: application/json');
    echo json_encode($product_list);

?>

