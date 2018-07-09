Login Register Dashboard 
================================

## Methods
### Validation 
- username is less than 3 characters
- username already exist in database 

### Password Validation 
- Using `password_hash`   
- place holders that will be used to bind the username value to `$stmt->execute` call to avoid sql injection by passing user data without query

### User Session 
- after a successful login then `session_start()` so user doesn't have to re-login after closing a tab
- `memberpage.php`, `sms.php`, `chart.php` has `if(!$user->is_logged_in()){ header('Location: login.php'); }` to check if a user is logged in or has a session. 	

## File Tree
```TREE
dashboard
    |   .gitattributes
    |   chart.php
    |   db.sql
    |   index.php
    |   login.php
    |   logout.php
    |   memberpage.php
    |   README.md
    |   sms.php
    |   
    +---classes
    |       password.php
    |       user.php
    |       
    +---css
    |       bootstrap.min.css
    |       bootstrap.min.css.map
    |       style.css
    |       
    +---img
    |       chart-update-default.png
    |       
    +---includes
    |       config.php
    |       
    +---js
    |       bootstrap.min.js
    |       bootstrap.min.js.map
    |       util.js
    |       
    +---layout
    |       footer.php
    |       header.php
    |       
    \---style
            main.css
```
            


## Conclusion and Improvements

~~1. Implementing maximum login attempt >=3 times will be blocked~~
 *DONE. 3:49AM 7/10/2018*

2. Catching data from database to dashboard with API 

3. Switching database to the live sms LOG's database

4. This has been a journey of learning PHP from scratch. 