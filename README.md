# XMaS (Xtracurricular Management System)

## Description
XMaS is a user-friendly website that helps manage and organize various Xtra activities in the Rumah Talenta BCA area and the BCA Learning Institute. It serves as a central place for administrators (DPP), all PPTI/PPBP students, and the wider community to efficiently plan, participate in, and stay informed about different Xtra programs and events. XMaS enables administrators (DPP) and Xtra leaders to coordinate and oversee activities effectively. The platform is designed to meet the specific needs of the organization, providing features that improve organization, engagement, and communication.

## Our Technologies
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

## Installations & Usages
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

## Features
### Guest:

### Non-Member:

### Member:

### Leader:

### Admin:


