# JMI Barang

Testing module barang


## Installation Step
1. Composer  
    * require and repositories
    
    ```
    "require": {
        ...

        "jalinmodule/barang": "dev-master"
    },
    ```
    ```
    "repositories":[
        ...

        {
            "type":"git",
            "url":"git@git.ip:jalinmodule/barang.git"
        }
    ],
    ```
    * Update composer
    
    ```
    composer update
    ```

2. config/app.php 
    * Moduls
    
    ```
    'moduls' => [
        ...
        'barang' => '/barang',
        ],
    ```
    * providers
   
    ```
    Jalinmodule\Barang\BarangServiceProvider::class,
    ```
    
3. artisan
   
    ```
    php artisan vendor:publish
    ```

    ```
    php artisan migrate
    ```


    
## Usage example
```
http://localhost:8000/barang
```