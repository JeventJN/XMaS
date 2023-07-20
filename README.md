# XMaS (Xtracurricular Management System)

## Description 👀
XMaS is a user-friendly website that helps manage and organize various Xtra activities in the Rumah Talenta BCA area and the BCA Learning Institute. It serves as a central place for administrators (DPP), all PPTI/PPBP students, and the wider community to efficiently plan, participate in, and stay informed about different Xtra programs and events. XMaS enables administrators (DPP) and Xtra leaders to coordinate and oversee activities effectively. The platform is designed to meet the specific needs of the organization, providing features that improve organization, engagement, and communication.

## Our Technologies ⚙
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

## Installations & Usages 🔑
Here are some steps that need to be done to be able to run the XMaS website:
1.  Make sure that your desktop is always connected to the internet.
2.	Make sure that you’ve installed Laravel, XAMPP, and NPM on your desktop. Here’s the installation guide for:
    -	<a href="https://laravel.com/docs/8.x/installation">Laravel</a>
    -	<a href="https://www.apachefriends.org/download.html">XAMPP</a>
    -	<a href="https://docs.npmjs.com/downloading-and-installing-node-js-and-npm">NPM</a>
3.	Make sure that you’ve installed Git on your desktop and have it connected to your GitHub account. Here’s the installation guide for <a href="https://git-scm.com/book/en/v2/Getting-Started-Installing-Git">Git</a>.
4.	Find the GitHub url of the XMaS project by accessing the following link: https://github.com/JeventJN/XMaS.git
5.	Launch XAMPP by clicking on the Start buttons for the Apache and MySQL sections, and then click on the Admin button in the MySQL section.
6.	Access the command prompt (terminal) in Visual Studio Code and navigate to the desired folder by entering the command 'cd' followed by the folder name:
```cd directory_name```

    ![cd](https://github.com/FrenricoChang/XMaS/assets/99463854/f171085a-3ac5-430f-b7d7-cb979d745c4e)

7. To clone this XMaS project, type:
```git clone https://github.com/JeventJN/XMaS.git```

    ![git clone](https://github.com/FrenricoChang/XMaS/assets/99463854/5806f9c0-70a7-4882-84ec-1cd66127310c)

8. To get in the project, type:
```cd XMaS```

    ![cd XMaS](https://github.com/FrenricoChang/XMaS/assets/99463854/f55f268c-58c6-466f-acb8-0ee901a3ae25)

9. To copy the .env file, type:
```copy .env.example .env```
It is necessary because the Github file ignores .env from my real project so you’ve to copy one with this command.

    ![copy  env example  env](https://github.com/FrenricoChang/XMaS/assets/99463854/bc99a66f-f2d3-49cd-83c1-1a76f15cf88d)

10. For our further package manager, type: 
```composer install```

    ![composer install](https://github.com/FrenricoChang/XMaS/assets/99463854/71a4fa9c-ae22-42bc-a3a6-46cbaac26e02)
    ![composer install done](https://github.com/FrenricoChang/XMaS/assets/99463854/82b09089-37ff-4074-9f2b-76d2266fd988)


11. To generate random string for apps encryption and decryption, type:
```php artisan key:generate```

    ![php artisan keygenerate](https://github.com/FrenricoChang/XMaS/assets/99463854/2568b113-2eae-4556-86aa-3e82b23675bc)

12. To install Node Package Manager (node package dependencies), type:
    - ```npm install``` 
    - ```npm run build```

    ![npm install run build](https://github.com/FrenricoChang/XMaS/assets/99463854/4bf20811-b133-4a37-8b1b-ccfb28c669cd)

13. To install Bootstrap for the CSS framework, type:
```npm install bootstrap@v5.2.3```

    ![install bootstrap](https://github.com/FrenricoChang/XMaS/assets/99463854/31fad4cb-0d72-4801-b7a0-9d1153e21cd8)

14. Before you run the website, open .env file on the explorer, and type:
    ```sh
    FILESYSTEM_DRIVER = public
    FILESYSTEM_DISK = public
    ```
    ![FILESYSTEMDRIVER DISK](https://github.com/FrenricoChang/XMaS/assets/99463854/7ac0abb5-6d6f-4eea-a542-de6cbc9e08ec)

15. To connect with the database, type:
    - ```php artisan storage:link```

      ![storagelink](https://github.com/FrenricoChang/XMaS/assets/99463854/e31bcb79-e8a8-4c90-87bd-e5a34fe48fd5)

    - ```php artisan migrate```

      ![php artisan migrate](https://github.com/FrenricoChang/XMaS/assets/99463854/ca126711-bc25-4192-a89b-3d5b5059fa23)

    - ```php artisan migrate:fresh –-seed```

      ![migrate fresh seed](https://github.com/FrenricoChang/XMaS/assets/99463854/2c347419-8ca3-4bdc-900d-4a5b252f37f4)


16. To prepare the environment, type:
```npm run dev```

    ![run dev](https://github.com/FrenricoChang/XMaS/assets/99463854/495408ce-b839-44bd-b9b3-891831f23037)

17. To access the website, type:
```php artisan serve```

    ![artisan serve](https://github.com/FrenricoChang/XMaS/assets/99463854/4929fbc0-b074-48fb-a180-a13354f29c48)

18. Now you can accessed the XMaS website through the given link.
19. To change the host or hostname into localhost, type with the format like this:
    ```sh
    localhost:port/home
    ```
    ![localhost](https://github.com/FrenricoChang/XMaS/assets/99463854/05feff83-4872-4a4e-b622-9192ba39a934)

## Features ✔
On XMaS website, users are divided into 4 types:

### Guest:
On the home page for guests, there is a banner inviting them to Sign Up as a user on XMaS website. 
![image](https://github.com/FrenricoChang/XMaS/assets/99463854/7cd4700b-7782-4f68-8f38-56965cd0db64)
Guests can access the Xtra List to view available Xtras and use the search feature to find Xtras by name and filter them by category (physical and non-physical) and the date of the Xtra event. Guests will then proceed to Sign Up and register as users on the website by providing personal information such as their name, Employee ID (NIP), program they are following, phone number, password, and profile photo. After providing the Sign Up data, guests will receive an OTP (One-Time Password) for verification.


https://github.com/FrenricoChang/XMaS/assets/99463854/63eddebb-68d7-4ebb-8259-b83d4ce9c389



### Non-Member:
On the home page for Non-Members, there is a different banner than the one shown to guests. 
![image](https://github.com/FrenricoChang/XMaS/assets/99463854/d017d85e-7ad8-4ab3-beb2-e1a52c4c9894)
Non-Members can directly log in using their Employee ID (NIP) and registered password. They can register for Xtras on the Xtra Registration Page, update their profile photo and registered phone number, access the Xtra Page to view Xtra descriptions, documentation, and members, and also log out and delete their account on the profile page.


https://github.com/FrenricoChang/XMaS/assets/99463854/86fcbe87-1a81-4713-8c78-6c2168e89e7d



### Member:
Members of an Xtra can use the MyClub menu to access the WhatsApp contact of the Xtra's Leader. They can also use the "Request Leader Access" feature on the profile page to apply as the leader of the Xtra they are following. On the Xtra Page, members can check the "Presence Member List" to see who attended the Xtra event on a particular date.


https://github.com/FrenricoChang/XMaS/assets/99463854/97003a26-938f-4add-b97d-f60047504aae


### Leader:
Leaders of Xtras have a different view of the MyClub page. They can use the edit button to modify the data related to the Xtra they lead, such as Xtra logo, background picture, description, and documentation. Leaders also have access to create a report form on the profile page, and they can perform "Add Schedule" and "Add Attendance" on the Xtra page.


https://github.com/FrenricoChang/XMaS/assets/99463854/26ad0ee4-f733-4241-8d2f-122ea3ce5c49



### Admin:
To log in as Admin, use this NIP and Password:
- NIP        : 0000
- Password   : 12.345
On the Admin's home page, there are additional sections labeled "Newest Report" and "Check Report." 
![screencapture-127-0-0-1-8000-home-2023-07-20-23_52_03](https://github.com/FrenricoChang/XMaS/assets/99463854/78ed0bcf-10fa-41b4-a606-ade7f27007ab)
On the Xtra List Admin page, the Admin can create a new Xtra using the "Add Xtra" feature and delete existing Xtras using the "Delete Xtra" feature. On the Report List menu, the Admin can search for reports using live search and filters (based on response status and report creation date), and can also approve or deny the reports. The Admin can access the approval menu to accept or deny the "Request Leader Access" that has been submitted. Finally, the Admin can log out.


https://github.com/FrenricoChang/XMaS/assets/99463854/2b713830-81ce-4556-8084-fb11b64f539a


## Others 🎁
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


