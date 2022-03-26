StudyDrive Task:

Email:    admin@gmail.com
Password: Admin100

In Home Page there is Login/Register, You can login to admin panel with above credidential and register as a student you will login also to admin panel but you will see only students related menus.

Students, Course and Registration for Courses Tasks

Installation on Local PC
    1. Install XAMPP Server
    2. Install Laravel Composer
    3. Downlaod Project
    4. Paste Unzip formate in XAMPP Server --> htdocs
    5. Create in phpmyadmin with studydrive name
    4. Import Database file .sql to phpmyadmin 
    5. Run cmd in project directory --> and run this command --> php artisan serve 


General 
    I use User table as student to save time and manage both users (Student and Admin)
    that Admin can manage courses list, registered students list and creating students account by Admin, and Student account can create account and manage their profile and apply for courses. 

Reg-Student Column in Courses Table
    I create reg_student as a integer whenever student apply for specific courses so reg_student will calculate by (current_reg_student + 1) from this column i decid course are available or not

In User/Student table role column
    for now we have two roles (Student, Admin) I wanted to have a meaningfull small project to get something very easy from it. 

End 
    All functionality and concept are covered in this small app, due to busy and short time I manage hope it give you a good idea.
    

Don't hesitate to contact me, if you have any further questions regarding this app.



