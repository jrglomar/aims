## System Installation

# Requirements
- XAMPP PHP 7.4 or up
    https://www.apachefriends.org/download.html
- Composer latest
    https://getcomposer.org/download/

# System Migration
- cd your xampp on your cli depends on your directory
`cd C:/xampp/htdocs`
- clone the systems on your htdocs
`git clone https://github.com/jrglomar/aims.git`
- cd the system
`cd aims`
- install all dependencies
`composer install`
- create a .env file from .env.example
`cp .env.example .env`
- generate application key
`php artisan key:generate`
- setup your .env file such as API_URL, APP_URL, and DB_DATABASE on my case its 
APP_URL=
API_URL=/api
DB_DB_DATABASE = aims
and the rest is default
- create a database base on your .env on my end i named the database as (aims) then run a migration with seeder
`php artisan migrate:fresh --seed`
- run the app
`php artisan serve`


## Login at APP_URL/login to setup system
<div>
    <table>
        <thead>
            <tr>
                <th><strong>Email</strong></th>
                <th><strong>Password</strong></th>
                <th><strong>Role</strong></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>admin@gmail.com</td>
                <td>User01</td>
                <td>Admin</td>
            </tr>
        </tbody>
    </table>
</div>

