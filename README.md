# PHP OOP DB Connection
---

*Its easy to use this class. follow the steps below to get started*

1. Create your database
2. In private directory rename database_config_example.php to daabase_config.php
3. update DB_HOST, DB_USER, DB_PASS, DB_NAME with your credentials

```php
define("DB_HOST", "HOST_HERE");
define("DB_USER", "DB_USER_HERE");
define("DB_PASS", "DB_USERS_PASSWORD_HERE");
define("DB_NAME", "DB_NAME_HERE");
```

4. create table test_users **or** just run SQL Below

```sql
DROP TABLE IF EXISTS `test_users`;

--create test_users table
CREATE TABLE `test_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- insert a couple test rows
INSERT INTO `test_users` VALUES (1,'John','Doe','johndoe'),
(2,'Jane','Doe','janedoe');
```

5. Navigate to public/index.php, you should see the following.
```php
Array ( [0] => User Object ( [id] => 1 [first_name] => [last_name] => [username] => johndoe ) [1] => User Object ( [id] => 2 [first_name] => [last_name] => [username] => janedoe ) )
```