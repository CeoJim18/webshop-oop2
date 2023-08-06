# PHP Webshop

## Description

This is a PHP webshop project that allows users to browse, search, add, remove and edit products. The project is built using PHP , MySQL for database storage, and HTML/CSS for the frontend. This project was made in Ubuntu Linux 22.04 OS.

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

## Prerequisite

Here are things that should be done/taken into consideration before proceeding with further steps.

### Linux:

1. Install LAMP (Linux Apache MySQL and PHP). All these 3 should be installed individually.

2. Locate php.ini file (usual location: `/etc/php/(php_version)/` in my case it was: `/etc/php/8.1/apache2`).

3. Change upload_max_filesize and post_max_size to be large enough so that large images can also be uploaded with php forms (post_max_size value should be upload_max_filesize + 10M). In my case this was `upload_max_filesize = 50M` and `post_max_size = 60M`.

4. After changing the values, make sure to restart apache server.

5. Create a folder named `uploads` which is located in directory `/var/www/html`.

6. Only give the apache server permission over the newly created `uploads` folder (with the command:`sudo chown -R www-data:www-data /var/www/html/uploads`).

## Installation

1. Create the directory `/var/www/html/{folderName}`.In this project, the folder name is 'webshop'. If you want to use a different project name, follow
  [this section](#project-namechange) to see which parts of the code to change, in order to reflect that change.

2. Clone the repository: `git clone https://github.com/CeoJim18/webshop-oop2.git` in the folder you created in step 1.

3. Create the database and add in 2 tables named 'categories' and 'products'.

4. Update the database connection settings in `database.php` file.


## Usage

1. Run the project on your local development server (e.g., XAMPP, WAMP, MAMP).
2. Access the website in your web browser at `http://localhost/your-repo`.

## When project name changes: <a id="project-namechange"></a> 
### Replace {yourNewProjectName} in all of the scripts below with the name you gvae to your project. Skip this step if you used the same name this project originally has. 

- Change the following in `create_product.php` file: `php 
         echo "<div class='right-button-margin'>
         <a href='/{yourNewProjectName}/index.php' class='btn btn-default pull-right'>Read Products</a>
          </div>";
          `

- Change the following from read_template.php:
  1. ```php
        echo "<form role='search' action='/{yourNewProjectName}/public/search.php'>
     ```
  2. ```php
             // create product button
             echo "<div class='right-button-margin'>
             <a href='/{yourNewProjectName}/public/create_product.php' class='btn btn-primary pull-right createproduct-btn-text'>
             <span class='glyphicon glyphicon-plus'></span> Create Product
         </a>
     </div>";
     ```
  3. ```php
       // read product button
       echo "<a href='/{yourNewProjectName}/public/read_one.php?id={$id}' class='btn btn-primary left-margin bold-text '>
                       <span class='glyphicon glyphicon-list'></span> Read
                   </a>";
     ```
  4. ```php
      // edit product button
       echo "<a href='/{yourNewProjectName}/public/update_product.php?id={$id}' class='btn btn-info left-margin bold-text '>
                       <span class='glyphicon glyphicon-edit'></span> Edit
                   </a>";
     ```

## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvement, feel free to open an issue or submit a pull request.

## Contact

For questions or inquiries, you can reach out to [Jimmy Kharpatoe](mailto:20200103@student.uvs.edu).

<----------------------------->

