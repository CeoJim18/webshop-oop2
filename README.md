# PHP Webshop

## Description

This is a PHP webshop project that allows users to browse, search, add, remove and edit products. The project is built using PHP , MySQL for database storage, and HTML/CSS for the frontend. This project was made in Ubuntu Linux 22.04.

## Features

- Search Products by Name or Description
- Product Read One Page with Product name, Images (optional), Category and Descriptions
- Create, Edit and Remove products

## Technologies Used

- PHP
- MySQL
- HTML
- CSS
- JavaScript

## Prerquisetes

Here are things that should be done/taken into consideration before proceeding with further steps.

### Linux:

1. Install LAMP (Linux Apache MySQL and PHP). All these 3 should be installed individually.

2. Locate php.ini file (usual location: /etc/php/(php_version)/; in my case it was: /etc/php/8.1/apache2).

3. Change upload_max_filesize and post_max_size to be large enough so that large images can also be uploaded with php forms (post_max_size value should be upload_max_filesize + 10M). In my case this was upload_max_filesize = 50M and post_max_size = 60M.

4. After changing the values, make sure to restart apache server.

5. Create a folder named `uploads` which is located in directory `/var/www/html`.

6. Only give the apache server permission over the newly created `uploads` folder (`sudo chown -R www-data:www-data /var/www/html/uploads`).

## Installation

1. Create the directory `/var/www/html/{folderName}`.In this project, the folder name is 'webshop'. If you want to use a different project name, follow
   [this section]{#folder-name-change} to see which parts of the code to change, in order to reflect that change.

2. Clone the repository: `git clone https://github.com/CeoJim18/webshop-oop2.git` in the folder you created in step 1.

3. Create the database and add in 2 tables named 'categories' and 'products'.

4. Update the database connection settings in `config.php` file.

5.

## Usage

1. Run the project on your local development server (e.g., XAMPP, WAMP, MAMP).
2. Access the website in your web browser at `http://localhost/your-repo`.

## When project name changes: {#folder-name-change}

- Change `php private $db_name = {yourNewFolderName};` in database.php.

- Change ```echo "<div class='right-button-margin'>
  <a href='/{yourNewFolderName}/index.php' class='btn btn-default pull-right'>Read Products</a>
    </div>";``` in create_product.php file

- Change the followibg from read_template.php:
  1. `php echo "<form role='search' action='/{yourNewFolderName}/public/search.php'>`
  2. ````php
             // create product button
             echo "<div class='right-button-margin'>
             <a href='/webshop/public/create_product.php' class='btn btn-primary pull-right createproduct-btn-text'>
             <span class='glyphicon glyphicon-plus'></span> Create Product
         </a>
     </div>";```
     ````
  3. ```php
       // read product button
       echo "<a href='/webshop/public/read_one.php?id={$id}' class='btn btn-primary left-margin bold-text '>
                       <span class='glyphicon glyphicon-list'></span> Read
                   </a>";
     ```
  4. ````php
      // edit product button
       echo "<a href='/webshop/public/update_product.php?id={$id}' class='btn btn-info left-margin bold-text '>
                       <span class='glyphicon glyphicon-edit'></span> Edit
                   </a>";```
     ````

## Screenshots

![Screenshot 1](path/to/screenshot1.png)
![Screenshot 2](path/to/screenshot2.png)

## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvement, feel free to open an issue or submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE).

## Contact

For questions or inquiries, you can reach out to [Your Name](mailto:your.email@example.com).

<----------------------------->
##READ ME

Toen ik met de letterlijke code van die tutorials werkte (copy pasten en uittesten zoals meneer dat zei) Hierdoor heb ik veel moeten debuggen. Ook kreeg ik veel errors.

Errors create() method product.php:

Er moest een try-catch block staan in die create() methode van products.php
Errors bij uploading file functionality:

Bij dat laatste stukje van de eerste link, moest ik zelf uitvinden dat ik de absolute path moet gebruiken van de folder waarin ik images wou uploaden
Ook moest de web-server (in mijn geval Apache) permission krijgen alvorend het files van de temporary directory zou kunnen verplaatsen naar de local dir.
Dit werd gedaan via de terminal van ubuntu met de command: 'chown -R www-data:www-data /var/www/html/uploads/

PS: dit alles was niet vermeld in de tutorial, moest het zelf uitzoeken uren lang.

Added erbij:

- Custom Fonts (OpenSans): Hiervoor moest ik extra php code zetten in header.php (zie comment <!----FONT-CONTROL PHP CODE --> in header.php)

Ook vermelden over php.ini file, dat je daarin de size moest veranderen van upload welke kan via php forms:
; Allow file uploads up to 50 megabytes
upload_max_filesize = 50M

; Ensure that post_max_size is larger than upload_max_filesize
post_max_size = 60M

Deze 2 dingen moesten verandert worden.

Daarna moest apache server restart worden. Ook moet alleen de server (www-data) permission krijgen over de folder waarin images worden geupload.
