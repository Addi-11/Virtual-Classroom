# Octocat Classes
An online classroom web-application, making learning easy and reachable to all. 
both schools, universities and private tutors can make use of the web-application.

## Getting Started

This project is made entirely in "Localhost" using Apache or HTTP Server. Kindly follow the below mentioned instructions to run it on your machine.

### Pre-requisites

You need only [XAMPP](https://www.apachefriends.org/index.html) to run this project on your local machine.
[XAMPP](https://www.apachefriends.org/index.html) is a completely free, easy to install Apache distribution containing MariaDB, PHP, and Perl.

### Setup

* Git Clone the Repo or download the Project Zip file.
* Extract the files in the htdocs directory where you installed [XAMPP](https://www.apachefriends.org/index.html).
  Lets assume you installed [XAMPP](https://www.apachefriends.org/index.html) in C drive. Then your path to htdocs will be,
  ```
  C:/xampp/htdocs/
  ```

* Start the Apache & MySQL(or MariaDB) module in XAMPP Control Panel.
* Go to phpmyadmin from your browser & import the database which is provided as a [SQL file](database/e_classrooms.sql) in the Project zip under Database folder.
* Change the credentials in [config file](includes/config.php) to your username, server (usually localhost) and password.

## Build With

This is Web Development Project based on PHP. The Web Technology used are : 
   * PHP
   * HTML
   * CSS
   * JavaScript
   * Semantic-UI
   * JQuery
   * MariaDB (or MySQL) (DataBase)

## Features
The project provides standardized features for an online classroom. Below are some of the key features : 
* Clean and easy to navigate UI.
* Complete & seperate Register, Login & Working Panel for students and teachers.
* Quick and easy class creation and join using an auto-generated classcode.
* Easy Assignment creation by teacher and submission by student.
* An inbuild grading system for the teachers with an integrated percentage calculating system.
* Personal weekly time-tables for teacher and student.
* Interface to know the vaccination status of all the students in class.
* Staff Room feature for teachers to exchange information on students, their school or locality.
* Discussion Groups for students to discuss subjects or exchange notes.

To know more details [click here.](docs/features.md)
    
