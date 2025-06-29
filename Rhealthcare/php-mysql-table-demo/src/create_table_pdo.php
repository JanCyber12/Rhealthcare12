<?php
// File: create_table_pdo.php

require_once 'config/db_config.php';

try {
    // Database configuration
    $config = getDbConfig();
    $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset=utf8mb4";
    
    // Create a PDO instance
    $pdo = new PDO($dsn, $config['username'], $config['password']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL query to create a table
    $sql = "CREATE TABLE IF NOT EXISTS users (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(50) NOT NULL,
        last_name VARCHAR(50) NOT NULL,
        email VARCHAR(100) NOT NULL UNIQUE,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    // Execute the query
    $pdo->exec($sql);
    echo "Table 'users' created successfully using PDO.";

} catch (PDOException $e) {
    echo "Error creating table: " . $e->getMessage();
}
?>