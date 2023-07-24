# XMaS (Xtracurricular Management System)

## 📝 Description 
XMaS is a user-friendly website that helps manage and organize various Xtra activities in the Rumah Talenta BCA area and the BCA Learning Institute. It serves as a central place for administrators (DPP), all PPTI/PPBP students, and the wider community to efficiently plan, participate in, and stay informed about different Xtra programs and events. XMaS enables administrators (DPP) and Xtra leaders to coordinate and oversee activities effectively. The platform is designed to meet the specific needs of the organization, providing features that improve organization, engagement, and communication.

## ⚙ Our Technologies 
In the XMaS website development project, we utilized several technologies, such as:
1.	Laravel (PHP Framework)
2.	XAMPP
3.	Bootstrap (CSS Framework)
4.	Tailwind (CSS Framework)
5.	HTML
6.	CSS
7.	JavaScript
8.	Composer
9.	NodeJS
10.	NPM (Node Package Manager)
11.	Git and GitHub
12.	Firebase Authentication
13.	Ajax

## 🔑 Installations & Usages 
Here are some steps that need to be done to be able to run the XMaS website:
1.  Make sure that your desktop is **always connected** to the internet.
2.	Make sure that you’ve installed Laravel, XAMPP, and NPM on your desktop. Here’s the installation guide for:
    -	<a href="https://laravel.com/docs/8.x/installation">Laravel</a>
    -	<a href="https://www.apachefriends.org/download.html">XAMPP</a>
    -	<a href="https://docs.npmjs.com/downloading-and-installing-node-js-and-npm">NPM</a>
3.	Make sure that you’ve installed Git on your desktop and have it connected to your GitHub account. Here’s the installation guide for <a href="https://git-scm.com/book/en/v2/Getting-Started-Installing-Git">Git</a>.
4.	Find the GitHub url of the XMaS project by accessing the following link: https://github.com/JeventJN/XMaS.git
5.	Launch XAMPP by clicking on the Start buttons for the Apache and MySQL sections, and then click on the Admin button in the MySQL section.
6.	Create a new folder
7.	Access the command prompt (terminal) in Visual Studio Code and navigate to the created folder by entering the command 'cd' followed by the folder name:
```cd directory_name```

    ![cd](https://github.com/FrenricoChang/XMaS/assets/99463854/f171085a-3ac5-430f-b7d7-cb979d745c4e)

8. To clone this XMaS project, type:
```git clone https://github.com/JeventJN/XMaS.git```

    ![git clone](https://github.com/FrenricoChang/XMaS/assets/99463854/5806f9c0-70a7-4882-84ec-1cd66127310c)

9. To get in the project, type:
```cd XMaS```

    ![cd XMaS](https://github.com/FrenricoChang/XMaS/assets/99463854/f55f268c-58c6-466f-acb8-0ee901a3ae25)

10. To copy the .env file, type:
```copy .env.example .env```
It is necessary because the Github file ignores .env from my real project so you’ve to copy one with this command.

    ![copy  env example  env](https://github.com/FrenricoChang/XMaS/assets/99463854/bc99a66f-f2d3-49cd-83c1-1a76f15cf88d)

11. For our further package manager, type: 
```composer install```

    ![composer install](https://github.com/FrenricoChang/XMaS/assets/99463854/71a4fa9c-ae22-42bc-a3a6-46cbaac26e02)
    ![composer install done](https://github.com/FrenricoChang/XMaS/assets/99463854/82b09089-37ff-4074-9f2b-76d2266fd988)


12. To generate random key for apps encryption and decryption, type:
```php artisan key:generate```

    ![php artisan keygenerate](https://github.com/FrenricoChang/XMaS/assets/99463854/2568b113-2eae-4556-86aa-3e82b23675bc)

13. To install Node Package Manager (node package dependencies), type:
    - ```npm install``` 
    - ```npm run build```

    ![npm install run build](https://github.com/FrenricoChang/XMaS/assets/99463854/4bf20811-b133-4a37-8b1b-ccfb28c669cd)

14. To install Bootstrap for the CSS framework, type:
```npm install bootstrap@v5.2.3```

    ![install bootstrap](https://github.com/FrenricoChang/XMaS/assets/99463854/31fad4cb-0d72-4801-b7a0-9d1153e21cd8)

15. Before you run the website, open .env file on the explorer, and type:
    ```sh
    FILESYSTEM_DRIVER = public
    FILESYSTEM_DISK = public
    ```
    ![FILESYSTEMDRIVER DISK](https://github.com/FrenricoChang/XMaS/assets/99463854/7ac0abb5-6d6f-4eea-a542-de6cbc9e08ec)

16. To connect with the database, type:
    - ```php artisan storage:link```

      ![storagelink](https://github.com/FrenricoChang/XMaS/assets/99463854/e31bcb79-e8a8-4c90-87bd-e5a34fe48fd5)

    - ```php artisan migrate```

      ![php artisan migrate](https://github.com/FrenricoChang/XMaS/assets/99463854/ca126711-bc25-4192-a89b-3d5b5059fa23)

      (Then choose "Yes")

    - ```php artisan migrate:fresh –-seed```

      ![migrate fresh seed](https://github.com/FrenricoChang/XMaS/assets/99463854/2c347419-8ca3-4bdc-900d-4a5b252f37f4)


17. To prepare the environment, type:
```npm run dev```

    ![run dev](https://github.com/FrenricoChang/XMaS/assets/99463854/495408ce-b839-44bd-b9b3-891831f23037)

18. To access the website, type:
```php artisan serve```

    ![artisan serve](https://github.com/FrenricoChang/XMaS/assets/99463854/4929fbc0-b074-48fb-a180-a13354f29c48)

19. Now you can access the XMaS website through the given link.
20. Change the host or hostname into localhost, type with the format like this:
    ```sh
    localhost:port/home
    ```
    ![localhost](https://github.com/FrenricoChang/XMaS/assets/99463854/05feff83-4872-4a4e-b622-9192ba39a934)

## ✍️ Features
On XMaS website, users are divided into 5 types:

### Guest:
- On the home page for guests, there is a banner inviting them to Sign Up as a user on XMaS website. 
![image](https://github.com/FrenricoChang/XMaS/assets/99463854/7cd4700b-7782-4f68-8f38-56965cd0db64)

    https://github.com/FrenricoChang/XMaS/assets/99463854/56a69b2c-f224-4b58-a7e9-9c8bebcfd014


- Guests can access the Xtra List to view available Xtras and use the live search feature to find Xtras by name and filter them by category (physical and non-physical) and the da of the Xtra event.
  

    https://github.com/FrenricoChang/XMaS/assets/99463854/e3e961a1-0c8c-4369-930b-f106a65b65eb



### Non-Member:
- To become a Non-Member user, Guests must register on the website by providing personal information such as their name, Employee ID (NIP), program they are following, phone number, password, and profile photo. After entering the registration data, guests will receive an OTP (One-Time Password) for verification.
![WhatsApp Image 2023-07-21 at 14 50 39](https://github.com/FrenricoChang/XMaS/assets/99463854/fa24eff6-8aed-479a-9d78-263200c6cf0e)

    https://github.com/FrenricoChang/XMaS/assets/99463854/6b209103-f3f5-44bc-9b1c-0f3f7200bb24

  
- Non-Members can directly log in using their Employee ID (NIP) and registered password.
  

    https://github.com/FrenricoChang/XMaS/assets/99463854/2e27f6a8-2167-4c32-b2b8-05ab82d08dab

  
- On the home page for Non-Members, there is a different banner than the one shown to guests. 
![image](https://github.com/FrenricoChang/XMaS/assets/99463854/d017d85e-7ad8-4ab3-beb2-e1a52c4c9894)

    https://github.com/FrenricoChang/XMaS/assets/99463854/c4d26d3f-d8c7-4c52-b30b-afbef00d0ba4

- They can register for Xtras on the Xtra Registration Page
  

    https://github.com/FrenricoChang/XMaS/assets/99463854/11b3bcfa-e7b8-46de-aeac-75a5a0519002


- Update their profile photo and registered phone number
  

    https://github.com/FrenricoChang/XMaS/assets/99463854/90a0dec4-c27c-4783-a5cb-ba4d09330192


- Access the Xtra Page to view Xtra descriptions, documentation, and members
  

    https://github.com/FrenricoChang/XMaS/assets/99463854/d9891bc3-012d-4d84-a8bb-6b592dce4d04


- Log out and delete their account on the profile page.

  
    https://github.com/FrenricoChang/XMaS/assets/99463854/622b7552-5ab7-4dc4-8837-a16a1d1fe795
  
    https://github.com/FrenricoChang/XMaS/assets/99463854/2f81a277-1274-4bd6-a900-90503ad7620d
  


### Member:
- Members of an Xtra can use the MyClub menu to access the WhatsApp contact of the Xtra's Leader.
  

    https://github.com/FrenricoChang/XMaS/assets/99463854/4d868275-60f1-4fcd-afbc-23ac567ed15e


- They can also use the "Request Leader Access" feature on the profile page to apply as the leader of the Xtra they are following.
  

    https://github.com/FrenricoChang/XMaS/assets/99463854/32ccd6e4-c0ec-4f8c-abc5-643ed1d3cb08


- On the Xtra Page, members can check the "Presence Member List" to see who attended the Xtra event on a particular date.
  

    https://github.com/FrenricoChang/XMaS/assets/99463854/5e39ae1a-3cf8-4ea1-8fa6-0c0281a6b02a



### Leader:
- Leaders of Xtras have a different view of the MyClub page. They can use the edit button to modify the data related to the Xtra they lead, such as Xtra logo, background picture, description, and documentation.
  

    https://github.com/FrenricoChang/XMaS/assets/99463854/db4b8646-64dc-47cf-834c-e7ac37615a15


- Leaders also have access to create a report form on the profile page
  

    https://github.com/FrenricoChang/XMaS/assets/99463854/b9aa7929-f38a-40bd-b2f7-768971bff2b0


- Leaders can perform "Add Schedule" and "Make Attendance" on the Xtra page.
  

    https://github.com/FrenricoChang/XMaS/assets/99463854/0fbd5c56-09e7-4c5d-b99a-19374a5e7938
  
    https://github.com/FrenricoChang/XMaS/assets/99463854/bd2cf907-565c-46f3-91e0-697b2ea6ba00



### Admin:
- To log in as Admin, use this NIP and Password:
    - NIP        : 0000
    - Password   : 12.345
- On the Admin's home page, there are additional sections labeled "Newest Report" and "Check Report."                                                                                                                           
![screencapture-127-0-0-1-8000-home-2023-07-20-23_52_03](https://github.com/FrenricoChang/XMaS/assets/99463854/78ed0bcf-10fa-41b4-a606-ade7f27007ab)

    https://github.com/FrenricoChang/XMaS/assets/99463854/a5b0b04a-7954-43d8-afc9-e65200108781


- On the Xtra List Admin page, the Admin can create a new Xtra using the "Add Xtra" feature and delete existing Xtras using the "Delete Xtra" feature.
  

    https://github.com/FrenricoChang/XMaS/assets/99463854/7ae39b9d-801b-4b61-ad2e-07ccadbb6a50


    https://github.com/FrenricoChang/XMaS/assets/99463854/ac753ad5-4422-4fb5-95e4-6a66dfa7eee3


- On the Report List menu, the Admin can search for reports using live search and filters (based on response status and report creation date), and can also approve or deny the reports.
  

    https://github.com/FrenricoChang/XMaS/assets/99463854/2064ce4f-e956-4884-9696-1ac71c72c909


- The Admin can access the approval menu to accept or deny the "Request Leader Access" that has been submitted.
  

    https://github.com/FrenricoChang/XMaS/assets/99463854/6558b859-49af-4ef5-9768-212ca5fd8160


- Finally, the Admin can log out.
  

    https://github.com/FrenricoChang/XMaS/assets/99463854/67d77713-7348-41b8-91d5-230eebd558d1



## 🎁 Others
### Our website also implements:
- Middleware
- Eager loading for n+1 problem
- Live search using ajax
- Filter
- session
- Eloquent ORM: relationship between model
- Factory
- Database seeder
- Faker
- Authentication
- Form validation
- CRUD



## 🤓 Our Teammates
-	Cecilia Audrey Herli	– 2502040461
-	Frenrico Chang	        – 2502041174
-	Jevent Natthannael	    – 2502041256
-	Vanessa Kwandinata	    – 2502041331
