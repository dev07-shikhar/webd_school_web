SUNRISE PUBLIC SCHOOL - LAB PRACTICAL

FILES
- index.php       Home page: school, director and principal message
- academics.php   Academics page with a sample student marksheet table
- admission.php   Student admission form
- header.php      Common header, navigation and CSS marquee
- footer.php      Common footer on all pages
- style.css       Styling, hover effects and transitions
- db.php          PHP-MySQL database connection
- submit.php      Receives form data and inserts it into MySQL
- database.sql    SQL commands to create the database and table

SETUP
1. Put the complete Admission folder inside C:\xampp\htdocs
   (or keep the folder name sunrise_school_website and use that name in the URL).
2. Start MySQL in XAMPP. Apache is not needed when using PHP's built-in server.
3. Open Command Prompt and run:
   cd C:\xampp\mysql\bin
   mysql -u root
4. At the MariaDB prompt, run the commands from database.sql.
   You can copy and paste the SQL commands one by one.
5. Open another Command Prompt and test PHP:
   C:\xampp\php\php.exe -v
6. If PHP works, start its built-in server:
   C:\xampp\php\php.exe -S localhost:8000 -t C:\xampp\htdocs
7. Keep that Command Prompt window open.
8. Open:
   http://localhost:8000/sunrise_school_website/
   If you rename the folder to Admission, use:
   http://localhost:8000/Admission/

DATABASE DETAILS
Host: localhost
Username: root
Password: blank (default XAMPP setting)
Database: school_db
Table: admissions

IMPORTANT
- If your MySQL root account has a password, update $password in db.php.
- If PHP still reports a php_ftp.dll Bad Image error, repair/reinstall the PHP/XAMPP
  installation from the official XAMPP source. Do not download individual DLL files
  from random websites.
- The built-in PHP server is for local development and lab practice, not production.
