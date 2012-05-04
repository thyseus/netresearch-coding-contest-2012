netresearch-coding-contest-2012
===============================

This is my implementation of a book database (in colloquial speech "library"). 

It was done for the netresearch-coding-contest-2012.

How to install:

1. Extract the yii framework (http://www.yiiframework.com) into your 
webroot (yii-1.1.10 recommended) 
2. Extract the coding contest files into a directory into your webroot
 (for example library/)
3. If not existing, create a empty directory assets/ and protected/runtime.
Make sure the Web Server process can write into these.
4. Load the .sql file in protected/docs/library.sql into your mysql database
5. Set the DB Connection in protected/config/main.php (db, username & password)
6. Run http://localhost/library.
7. Follow the On-Screen Instructions

