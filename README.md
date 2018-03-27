# PHP OOP DB Connection

*Its easy to use this class. follow the steps below to get started*

1. Create your database.
2. In private directory rename database_config_example.php to database_config.php.
3. update DB_HOST, DB_USER, DB_PASS, DB_NAME with your credentials.

```php
define("DB_HOST", "HOST_HERE");
define("DB_USER", "DB_USER_HERE");
define("DB_PASS", "DB_USERS_PASSWORD_HERE");
define("DB_NAME", "DB_NAME_HERE");
```

4. create table test_users **or** just run SQL Below.

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

5. Navigate to public/index.php, you should see the following output.
```php
Array ( [0] => User Object ( [id] => 1 [first_name] => [last_name] => [username] => johndoe ) [1] => User Object ( [id] => 2 [first_name] => [last_name] => [username] => janedoe ) )
```

6. **DONE**

## Methods

**find all users**
```php
$users = User::find_all();
```


**find user by id**
```php
$user = User::find_by_id(id);
```

**find users by query**
```php
$users = User::find_by_query("SELECT * FROM test_users WHERE username LIKE 'J%' ");
```

**create new user**
```php
$user = new User;
$user->first_name = 'new name';
$user->last_name = 'new last name';
$user->username = 'new username';
$user->save();
```

**update user by id**
```php
$user = User::find_by_id(id);
$user->first_name = 'new name';
$user->last_name = 'new last name';
$user->username = 'new username';
$user->update();
```

**update user by id**
```php
$user = User::find_by_id(id);
$user->first_name = 'new name';
$user->last_name = 'new last name';
$user->username = 'new username';
$user->update();
```

**delete user by id**
```php
$user = User::find_by_id(id);
$user->delete();
```

