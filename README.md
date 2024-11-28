# Setup And Application features
**Entry Point**: the main entry point of the application is Index.php file.Launch it by visiting *localhost:8000/backend/projects/profile_demo/index.php*
from the *index.php*, you have two options:
1. *New User*: click the **Register** button to Register.
2. *existing User* sign in by **clicking** the Login button.
## at the point of registration, the following actions are performed:
1. user information (username,email and password) are added to the application session object.
2. the password is hashed using **password_hash** function.
3. all the form fields are required, so the user is notified if any information is missing.
4. the database connection is created and opened
5. user details are saved to the database using **mysqli** functionalities.
## At the sign in page the following actions are taken:
1. user password is verified using **password_verify** function
2. the user name is compared and ensure it the same.
3. if either 1 or 2 fails, the user is denied access, and redirected back to the sign in page.
4. if 1 and 2 succeeds, the user is granted access, and redirected to the **profile management portal**
## At the profile management portal
1. the users can view their *profiles*.
2. they can update thier *profiles*
3. the can delete thier *profiles*
4. All changes are saved to the database.
## At the logout page:
1. the database connection is closed
2. the session object is destroyed
3. the **exit** function is call to terminate the program.
# sql script for database and table creation
    -- Create the database
CREATE DATABASE IF NOT EXISTS eti_db;

-- Use the created database
USE eti_db;

-- Create the profiles table
CREATE TABLE IF NOT EXISTS profiles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);


