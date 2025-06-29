# PHP MySQL Table Demo

This project demonstrates how to create a MySQL table using both MySQLi and PDO in PHP. It includes examples of establishing a database connection and executing SQL queries to create tables.

## Project Structure

```
php-mysql-table-demo
├── src
│   ├── create_table_mysqli.php
│   ├── create_table_pdo.php
│   └── config
│       └── db_config.php
├── .gitignore
├── composer.json
└── README.md
```

## Requirements

- PHP 7.0 or higher
- MySQL database server

## Setup Instructions

1. **Clone the Repository**
   ```bash
   git clone <repository-url>
   cd php-mysql-table-demo
   ```

2. **Install Dependencies**
   If you are using Composer, run the following command to install any dependencies:
   ```bash
   composer install
   ```

3. **Configure Database Settings**
   Open `src/config/db_config.php` and update the database configuration settings:
   ```php
   return [
       'host' => 'localhost',
       'username' => 'your_username',
       'password' => 'your_password',
       'database' => 'your_database_name',
   ];
   ```

4. **Create MySQL Table Using MySQLi**
   To create a table using MySQLi, run the script:
   ```bash
   php src/create_table_mysqli.php
   ```

5. **Create MySQL Table Using PDO**
   To create a table using PDO, run the script:
   ```bash
   php src/create_table_pdo.php
   ```

## Usage

- The `create_table_mysqli.php` script demonstrates how to create a table using the MySQLi extension.
- The `create_table_pdo.php` script demonstrates how to create a table using the PDO extension with prepared statements.

## License

This project is open-source and available under the MIT License.