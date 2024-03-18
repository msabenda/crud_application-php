

## Crud_Application ##


#### This is system which enables a user to create an account by signing up and then login by using credentials(email & password). Users information are stored in local database(mysql) using Xampp and are retrieved by using Hypertext preprocessor(php) for connection with database ####

#### Additional the user/admin can delete other users once as login in the system ####



**SETUP ENVIRONMENT**
---

'For Linux machine OS'
1. Install php in your machine [`php`]
    + `$ sudo apt-get install php`
  

2. Download and Install `Xampp`  ['xampp](https://www.apachefriends.org/download.html).


**CLONE THE REPOSITORY INTO YOUR MACHINE**
---

1. Clone the repository url into your machine into '/opt/lampp/htdocs' directory.
    + `$ cd /opt/lampp/htdocs`
    + `$ git clone https://github.com/msabenda/crud_application-php.git`
  
**STARTING APACHE AND MYSQL SERVER**
---

1. Start the apache and mysql server by executing this command.
 + `$ cd /opt/lampp`
 + `$ sudo ./manager-linux-x64.run`

2. Start the apache and mysql by simpliy click Start button.
![Alt Apache$MySQql](/read.png)

3. Open myadmin session on a browser ['phpmyadmin](http://localhost/phpmyadmin).

4. Create a database named 'crud' and table name is 'users' with 6 number of rows.
![Alt Database](/read3.png)

**OPENING A VISUAL STUDIO CODE**
---

1. Open the vscode software, then open the cloned repository folder in /opt/lampp/htdocs/crud_application.

2. Open signup.php file and fill your credentials then login and logout from your account.
![Alt Signup](/read1.png)


**Crud_Application-php(Backend)**
