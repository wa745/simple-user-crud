# simple-user-crud

Simple User CRUD

This is a simple PHP web application that allows users to:

- Submit their **name** and **age**
- View all submitted users in a table
- Toggle the **status** (active/inactive) of each user without refreshing the page

The project uses:
- **PHP** for backend
- **MySQL** as the database
- **HTML/CSS** for the form and table
- **JavaScript (Fetch API)** to update user status dynamically



# Features

- Add new users
- Display users in a table
- Toggle user status (0 or 1) via AJAX
- Data is stored in a MySQL database



# Technologies Used

- PHP
- MySQL
- HTML5 / CSS3
- JavaScript

---

## 📦 Database Setup

1. Create a database called `info`
2. Create a table called `user` with the following columns:

| Column | Type      | Notes                  |
|--------|-----------|-------------------------|
| id     | INT       | PRIMARY KEY, AUTO_INCREMENT |
| name   | VARCHAR(50) |                         |
| age    | INT       |                         |
| status | TINYINT   | Default value = 0       |

SQL:
```sql
CREATE TABLE user (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50),
  age INT,
  status TINYINT DEFAULT 0
);
