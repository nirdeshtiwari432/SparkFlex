## Prerequisites
1. Install XAMPP web server
2. Any Editor (Preferably VS Code or Sublime Text)
3. Any web browser with latest version

## Languages and Technologies used
1. HTML5/CSS3
2. JavaScript (to create dynamically updating content)
3. Bootstrap (An HTML, CSS, and JS library)
4. XAMPP (A web server by Apache Friends)
5. Php
6. MySQL (An RDBMS that uses SQL)
7. TCPDF (to generate PDFs)

## Steps to run the project in your machine
1. Download and install XAMPP in your machine
2. Clone or download the repository
3. Extract all the files and move it to the 'htdocs' folder of your XAMPP directory.
4. Start the Apache and Mysql in your XAMPP control panel.
5. Open your web browser and type 'localhost/phpmyadmin'
6. In phpmyadmin page, create a new database from the left panel and name it as 'test1'
7. Import the file 'test1.sql' inside your newly created database and click ok.
8. Open a new tab and type 'localhost/foldername' in the url of your browser
9. Hurray! That's it!
    
### SOFTWARES USED
  - XAMPP was installed on the Ubuntu 19.04 machine and APACHE2 Server and MySQL were initialized. And, files were built inside opt/lampp/htdocs/myhmsp
  - Sublime Text 3.2 was used as a text editor.
  - Google Chrome Version 77.0.3865.90 was used to run the project (localhost/myhmsp was used as the url).
  

### Starting Apache And MySQL in XAMPP:
  The XAMPP Control Panel allows you to manually start and stop Apache and MySQL. To start Apache or MySQL manually, click the ‘Start’ button under ‘Actions’.
  
## GETTING INTO THE PROJECT:
Hospital Management System in php and mysql. This system has a ‘Home’ page from where the patient, hospital administrator can login into their accounts by toggling the tabs accordingly.shows the ‘Home’ page of our project.

!

The ‘Home’ page consists of 2 modules:
1. Patient Module
2. Hospital Module


### Patient Module:

  &nbsp; &nbsp; &nbsp; This module allows patients to create their account, book an appointment to see a doctor .
  The registration page(in the home page itself) asks patients to enter their First Name, Last Name, Email ID, Contact Number, Password and radio buttons to select their gender.
  


Once the patient has created his/her own account after clicking the ‘Register’ button, then he will be redirected to his/her Dashboard.


The Dashboard page allows patients the perform one operations:

**1. Book his/her appointment:**

  &nbsp; &nbsp; &nbsp; Here, the patients can able to book their appointments to see a doctor. The appointment form requires patients to select the doctor that they want to see, Date and Time that they want to meet with the doctor. 



Once the patient has logged out of his account, if he wants to go into his account again, he can login his account, instead of register his account again. 
Clicking on ‘Login’ button will redirect the patient to his dashboard page which we have seen earlier 

**1. see the nearby hospital status and details:**

This is how the patient module works. On the whole, this module allows patients to register their account or login their account(if he/she has one), book an appointment in nearby hospital and get details about hospital and doctors 
for examlpe how many bed  are booked and which doctor is present today .

### Hospital Module:  &nbsp; &nbsp; &nbsp; The hospital can login into their account which can be done by toggling the tab from ‘Patient’ to ‘hospital’.shows the login form for a doctor. Registration of a doctor account can be done by hospital.
  
Once the doctor clicking the ‘Login’ button, they will redirected to main page

&nbsp; &nbsp; &nbsp; Once everything is done, the doctor can logout of their account. Thus, in general, a doctor can login into his/her account, view their appointments and search for a patient. This is all about Doctor Module.


This module allows admin to perform two major operations:

**3. View the Appointment lists:**

  &nbsp; &nbsp; &nbsp; Admin can also able to see the entire details of the appointment that shows the appointment details of the patients with their respective doctors. This includes the First Name, Last Name, Email and Contact Number of patients, doctor’s name, Appointment Date, Time and the Consultancy Fees. (See Fig 1.17). 
  
 
  
**4. Add Doctor:**

  &nbsp; &nbsp; &nbsp; Admin alone can add a new doctor since anyone can register as a doctor if we put this section on the home page. This form asks Doctor’s Name, Email ID, Password and his/her Consultancy Fees.(See Fig 1.18)
  
 
  
  After adding a new doctor, if we check the doctor’s list, we will see the details of new doctor is added to the list as shown in the user pannel.
  

  

  



 

 


