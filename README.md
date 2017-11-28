This is a modification of the simple album site application gone over in the Zend Framework tutorial. However, rather than being built with Zend, I built it using the Laravel framework.

Dependencies:

- Composer (You can find the myriad of ways to download composer [here](https://getcomposer.org/download/))
- Laravel (Installation suggestions are found [here](https://laravel.com/docs/5.5/installation))
- An installation of you favorite DBMS, ideally with an empty database ready to be modified

Steps to get a local instance of this application up and running after downloading it:

1. Configure the .env file to match your local database specs.

2. Using the command line, navigate to the AlbumSite directory. In this directory, type the following command:

```
php artisan migrate
```

Your database should now have the album table in it, which is needed for it to run properly.

3. You can add dummy data to the album table quite easily by executing the follow commands:

```
php artisan tinker
```
```
factory('App\Album', X)->create(); (Where X is equal to the amount of data you wish to make. I used 150.)
```

4. Finally, execute the following command to get a local instance of this app running on your computer:

```
php artisan serve
```

Files of interest:

- app/Album.php - the model I created
- app/Http/Controllers/AlbumController.php - the controller I created
- app/Http/Requests/CreateAlbumForm.php - the file I made to define form rules and to add the content entered into said form in the database
- database/migrations/2017_11_13_010943_create_albums_table.php - Database migration file I made
- database/factories/AlbumFactory.php - dummy data seeder I made
- routes/web.php - where I defined my app's routes
- Everything in the resources/views directory