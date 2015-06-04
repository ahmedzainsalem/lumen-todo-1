## TODO App with Lumen
I did this as a little 'getting to know' Lumen. It is incredibly simple
and doesnt really do much other than the typical Javascript framework
To-do list.

## How to use
- Clone the repo
```
git clone https://github.com/smlparry/lumen-todo
```
- Set up database connection in the .env file:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_DATABASE=todo
DB_USERNAME=root
DB_PASSWORD=root
```
- Make the database 'todo' or whatever you called it
- SSH into the virtual machine and run the following commands
```bash
cd /path/to/app/
```
```bash 
php artisan migrate
```
- Should just work!
- Have a play around and feel free to fork and make additions
