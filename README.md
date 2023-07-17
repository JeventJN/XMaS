# XMaS (Xtracurricular Management System)

## Description
XMaS is a comprehensive web-based platform designed to streamline and simplify the management of Xtra activities within the Rumah Talenta BCA area and the BCA Learning Institute. It serves as a centralized hub for administrators (DPP), all PPTI/PPBP students, and the wider community to efficiently organize, participate in, and stay informed about a diverse range of Xtra programs and events.
With XMaS, administrators (DPP) and all Xtra leaders can effectively coordinate and oversee the Xtra activities offered within the Rumah Talenta BCA area and the BCA Learning Institute. The platform caters to the unique needs of the institution, providing features that enhance organization, engagement, and communication.

## Technologies
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

## Installations & Usages
Here are some steps that need to be done to be able to run the XMaS website:
1.	Make sure that you’ve installed Laravel, XAMPP, and NPM on your desktop. Here’s the installation guide for:
-	<a href="https://laravel.com/docs/8.x/installation">Laravel</a>
-	<a href="https://www.apachefriends.org/download.html">XAMPP</a>
-	<a href="https://docs.npmjs.com/downloading-and-installing-node-js-and-npm">NPM</a>
2.	Make sure that you’ve installed Git on your desktop and have it connected to your GitHub account. Here’s the installation guide for <a href="https://git-scm.com/book/en/v2/Getting-Started-Installing-Git">Git</a>.
3.	Find the GitHub url of the XMaS project by accessing the following link:
https://github.com/JeventJN/XMaS.git
4.	Launch XAMPP by clicking on the Start buttons for the Apache and MySQL sections, and then click on the Admin button in the MySQL section.
![4](https://github.com/FrenricoChang/XMaS/assets/99463854/132117a4-3526-47f2-a8d5-b6c361f9af7f)

5.	Access the command prompt (terminal) in Visual Studio Code and navigate to the desired folder by entering the command 'cd' followed by the folder name:
```cd directory_name```
![5](https://github.com/FrenricoChang/XMaS/assets/99463854/9144923b-8b5e-4d65-8e22-7305602db05d)

6.	To clone this XMaS project, type:
```git clone https://github.com/JeventJN/XMaS.git```
![6](https://github.com/FrenricoChang/XMaS/assets/99463854/36b4a548-3989-4672-932f-02572ccee8b3)

7.	To get in the project, type:
```cd XMaS```
![7](https://github.com/FrenricoChang/XMaS/assets/99463854/d215b26a-7a4a-43ac-90ff-b699028584a9)

8.	For our further package manager, type: 
```composer install```
![8](https://github.com/FrenricoChang/XMaS/assets/99463854/dd834528-927f-4225-9673-c0b0942ac2ae)
![8 1](https://github.com/FrenricoChang/XMaS/assets/99463854/149c08df-6ac8-4fb1-95df-4a61412a1daf)

9.	To copy the .env file, type:
```copy .env.example .env```
It is necessary because the Github file ignores .env from my real project so you’ve to copy one with this command.
![9](https://github.com/FrenricoChang/XMaS/assets/99463854/274c6fe1-d60b-4f5a-b8e8-f48af5d432ff)

10.	To generate random string for apps encryption and decryption, type:
```php artisan key:generate```
![10](https://github.com/FrenricoChang/XMaS/assets/99463854/b2301443-34e7-4592-9829-6c32820bfd57)

11.	To connect with the database, type:
- ```php artisan migrate```
![11 1](https://github.com/FrenricoChang/XMaS/assets/99463854/8900c0ae-b801-45bd-b738-ddb69fff5140)

- ```php artisan db:seed```
![11 2](https://github.com/FrenricoChang/XMaS/assets/99463854/5b6a0496-c8d6-464a-a841-6dc07962380c)

- ```php artisan storage:link```
![11 3](https://github.com/FrenricoChang/XMaS/assets/99463854/4295259d-26a9-440f-961f-610ee07ed92b)

- ```php artisan migrate:fresh –seed```
![11 4](https://github.com/FrenricoChang/XMaS/assets/99463854/3f8fd585-e37e-492a-b5c0-1186c5f54cd6)

12.	To install Node Package Manager (node package dependencies), type:
- ```npm install``` 
- ```npm run build```
![12](https://github.com/FrenricoChang/XMaS/assets/99463854/4142e0bb-bbb5-4be3-b2bc-c1860f217b60)

13.	To install Bootstrap for the CSS framework, type:
```npm install bootstrap@v5.2.3```
![13](https://github.com/FrenricoChang/XMaS/assets/99463854/8c83b4b9-5da7-49dd-86a4-7ac4afffe180)

14.	To prepare the environment, type:
```npm run dev```
![14](https://github.com/FrenricoChang/XMaS/assets/99463854/8fe0dc26-d454-4cb9-b90d-e6d8c4e9a203)

15.	Before you run the website, open .env file on the explorer, and type:
```sh
FILESYSTEM_DRIVER = public
FILESYSTEM_DISK = public
```
![15](https://github.com/FrenricoChang/XMaS/assets/99463854/35fdbb30-9e8a-483e-933d-470b21aa1f9e)

16.	To access the website, type:
```php artisan serve```
![16](https://github.com/FrenricoChang/XMaS/assets/99463854/2dd16fe7-1139-4fae-bd58-1af844ba3184)

17.	Now you can be accessed through the given link.

18.	To change the host or hostname into localhost, type with the format like this:
```sh
Localhost:port/home
```
![18](https://github.com/FrenricoChang/XMaS/assets/99463854/d060e9de-463b-4d1c-9d8e-462408dc3220)

## Features
### Non-Admin User
The XMaS website is accessible to various types of users. To utilize the website's features, users must first create an account and then log in using their account credentials.
-	Sign Up

https://github.com/FrenricoChang/XMaS/assets/99463854/930025c5-7fca-4181-9bb9-cb38bda1ab52


-	Log In

https://github.com/FrenricoChang/XMaS/assets/99463854/c69c063a-7055-4c46-af5b-2298df0c57c2


Users can also access the profile section to edit their profile, including their photo and phone number.
-	Edit Profile

https://github.com/FrenricoChang/XMaS/assets/99463854/0e187af3-aae1-43f9-a5d2-564dcca360d9


Once logged in, users can navigate to the Xtralist section and join an Xtra.
-	Join Xtra

https://github.com/FrenricoChang/XMaS/assets/99463854/3b60559b-df8b-40a9-9452-3b5b9d411af9


After becoming a member, users have the option to request to become an Xtra leader and also leave the Xtra.
-	Request Leader Access

https://github.com/FrenricoChang/XMaS/assets/99463854/4d07b819-f156-44be-adb6-e0d48991653f


-	Leave Xtra

https://github.com/FrenricoChang/XMaS/assets/99463854/abfa82ca-180e-4efc-bd6d-d3f87257eb2a


Once a user becomes an Xtra leader, they can edit the Xtra page and create reports.
-	Edit Xtra

https://github.com/FrenricoChang/XMaS/assets/99463854/39c43d89-ba12-48dd-8de7-18c540ebbaf9


-	Create Report

https://github.com/FrenricoChang/XMaS/assets/99463854/dff0d801-a1ea-474d-9014-dc8619cfd58c


Users also have the ability to log out and delete their account.
-	Log Out

https://github.com/FrenricoChang/XMaS/assets/99463854/47de0dae-dac4-4336-9dc8-80c1dd0e2074


-	Delete Account

https://github.com/FrenricoChang/XMaS/assets/99463854/16ce01c0-9ebd-4bd1-a0ad-c973fcbfd18b


### Admin User
In order to utilize the XMaS website, the admin needs to log in using the provided account.
-	Log In

https://github.com/FrenricoChang/XMaS/assets/99463854/4d897fe1-4cc9-4bf4-b1b6-8e1dd8d3e61f


-	Log Out

https://github.com/FrenricoChang/XMaS/assets/99463854/2c0dd1cf-9a6c-465e-9da1-bcbd1ef49c78


The admin has the ability to create new Xtras and delete existing ones.
-	Create Xtra

https://github.com/FrenricoChang/XMaS/assets/99463854/7595aeaf-e690-4f12-8069-0d494127daea


-	Delete Xtra

https://github.com/FrenricoChang/XMaS/assets/99463854/884a827b-6f3b-498b-909f-12d23eff774c


Additionally, the admin can approve requests to become an Xtra leader.
-	Approve Leader Requests

https://github.com/FrenricoChang/XMaS/assets/99463854/fbc86a6b-be2a-4b72-b01a-d5c48355f67d


The admin also has the authority to accept or deny reports submitted by any Xtra.
-	Manage Reports

https://github.com/FrenricoChang/XMaS/assets/99463854/b3d3bc20-94d5-4107-8975-d40a881c2b83

