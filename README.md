 # Smart Health Management System 


Live Demo : [Smart Health Management System - 000webhost by ](https://shmsg1.000webhostapp.com/)
on this live demo some future's may not work because of the incopatability.

# Futures:

1. Ability to accept the record medical value.
2. User should not be allowed to register if he/she tries to provide the already registered email ID.
3. The password should be encrypted and the password field shouldn't be displayed in the admin panel.
4. Implementation of pagination for all the list view across the application.
5. Tabular representation of recorded data
6. realtime Graphical progress analisis.
7. Addition of more fields in medical value make it more specific one.


  # Prerequisites

1. Install XAMPP web server
2. Any Editor (Preferably VS Code or Sublime Text)
3. Any web browser with latest version


# Languages and Technologies used

1. HTML5/CSS3
2. JavaScript (to create dynamically updating content,and Grapical representaion)
3. Bootstrap (An HTML, CSS, and JS library)
4. XAMPP (A web server by Apache Friends)
5. Php
6. MySQL 


# Steps to run the project in your machine

1. Download and install XAMPP in your machine
2. Extract all the files and move it to the 'htdocs' folder of your XAMPP directory.
3. Start the Apache and Mysql in your XAMPP control panel.
4. Open your web browser and type 'localhost/phpmyadmin'
5. In phpmyadmin page, create a new database from the left panel and name it as 'shms'
6. Import the file 'databasefile/shms.sql' inside your newly created database and click ok.


               # USERS

     # username                        #password

    1. r@t.in                          123456
    2. chad@k.k                        123456
    3. ka@g.m                          123456
    4. nahomef@gmail.com               654321
    5. ak@gmail.com                    654321
    6. biruk@gmail.com                 123456

    
            # ADMIN

   # username                     # password

   1. admin                         admin123


## GETTING INTO THE PROJECT:
WEB-Based Smart Health Management System 

 This system has a ‘Home’ page from where the a visitor can see what we are offering.
 This system also has a ‘Login’ Users and administrator can login into their accounts by toggling the tabs accordingly.

‘Contact’ page allows users to provide feedback or queries about the services of the hospital. Fig 1.3 shows the ‘Contact’ page.

The ‘Login’ page consists of 3 modules:
1. User Module
2. Admin Module

1 User Module:

This module allows User to create their account, to store their health mesurement data, see their mesurement history and also their progress.
The registration page asks User to enter their First Name, Last Name, Email ID, Contact Number, Password and radio buttons to select their gender.

Once the User has created his/her own account after clicking the ‘Register’ button, then he will be redirected to Login

After login user's can record their medical data and also retrive the recorded data also they can see their progress in Grapical representaion.
Also they can update their profile including name, password, phone_number, bloodgroup, state and country.
also search operation is done by using date for record.

2. Admin Module

This module is the heart of our project where an admin can see the list of all users. see user recorded data and the feedback/queries received from the ‘Contact’ page. Also admin can add user too. 
Login into admin account can be done by toggling into admin tab of the Home page.
On clicking the ‘Login’ button, the admin will be redirected to his/her dashboard

search operation id done by using email for user and date for record.