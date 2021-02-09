###################
What is Skripsi
###################

CodeIgniter is an is a web-based learning media recommendation system using a codeigniter framework
for educational institutions. This system is made to provide recommendations for learning media that are in accordance with the learning styles of students. 
System Features: 
- Determining learners' learning styles
- Upload and Download learning media
- Quiz Mangement

*******************
Release Information
*******************

This repo contains in-development code for future releases. To download the
latest stable release please visit the `CodeIgniter Downloads
<https://codeigniter.com/download>`_ page.

**************************
Changelog and New Features
**************************

Version 1.0.0
=============

Release Date: 06 January 2021

-  General Changes

   -  Creating All general feature for this system
   -  Updated UI using Bootstrap and Use Framework Codeigniter.
   
**************************
Explaination
**************************
This system use 2 type system that is guru (admin) and siswa (user)
For All :
  - Controllers 
    - Login     (Login User)
    - LoginGuru (Login Admin)
    - Register  (Register User)
    - Register  (Register Admin)
For Admin :
  - Controllers (Folder Guru)
    - Overview (Profile Admin)
    - Kuis (Make a Quiz)
    - Upload M (Upload Learning Media)
    - Person (RUD Quiz)
For User :
  - Controllers (Folder Siswa)
    - Overview (Profile User)
    
    - Kuis (Quiz Page)
    
    - Media (Download Learning Media)
    
    - Person (View Quiz)

Models All User
  - LoginModel    (Login)
  - RegisterModel (Register)
  - Media_Model   (Media)
  - Person_model  (CRUD model Data Admin)
  - Person_model2 (CRUD model Data User)
  - UpdateGuru    (CRUD model Profile Admin)
  - UpdateSiswa   (CRUD model Profile Siswa)
  
*******************
Server Requirements
*******************

PHP version 5.6 or newer is recommended.

It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

************
Installation
************
-  Import Database .....
-  Run Use any PHP Development Environtment like XAMPP

   -  Creating All general feature for this system
   -  Updated UI using Bootstrap and Use Framework Codeigniter.
   
Please see the `installation section <https://codeigniter.com/user_guide/installation/index.html>`_
of the CodeIgniter User Guide.



*******
License
*******
This System is free for learning purpose. Contact for more information @fadhil09bagi@gmail.com

*********
Resources
*********

-  `User Guide <https://codeigniter.com/docs>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Forums <http://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Community Slack Channel <https://codeigniterchat.slack.com>`_

Report security issues to our `Security Panel <mailto:security@codeigniter.com>`_
or via our `page on HackerOne <https://hackerone.com/codeigniter>`_, thank you.

***************
Acknowledgement
***************

The CodeIgniter team would like to thank EllisLab, all the
contributors to the CodeIgniter project and you, the CodeIgniter user.
