This is a simple project which provides a Symfony RESTful API to manage categories for an e-commerce website.

The category entity has the following structure:
```javascript
{
        id: <Uuid>,
        name: <String>,
        slug: <String>,
        parentCategory: <Category>,
        isVisible: <Boolean>
}
```

## Required functionality:

* Clients can create a new category.
* Clients can retrieve a category by id or slug.
* Clients can retrieve a tree of children under a specific category.
* Clients can update the visibility status of a specific category. (UPDATE)

## Installation & Usage

* run ``` composer update ```
* run ``` docker-compose up -d ```
* run ``` vendor/phpunit/phpunit/phpunit ```
* go to ``` http://rest.dev:81/categories/ ``` to get the list  of all categories
* go to ``` http://rest.dev:81/category/<ID> ``` to get information about a single category
* go to ``` http://rest.dev:81/category/<SLUG>/ ``` to get information about a single category
* go to ``` http://rest.dev:81/category/<ID>/children ``` to retrieve a tree of children under a specific category
* use [Advanced REST client](https://chrome.google.com/webstore/detail/advanced-rest-client/hgmloofddffdnphfgcellkdfbfbjeloo) tool or cURL functions to perform the API testing.
* Testing examples:
    
    _Get access token:_
    ```
    URL: http://rest.dev:81/token 
    Method: POST
    Headers: Content-Type: application/json
    Body: {"grant_type":"client_credentials", "client_id":"test","client_secret":"test"}
    
    ```
    
    _Create a new category:_
    ```
    URL: http://rest.dev:81/category?access_token=<ACCESS_TOKEN>
    Method: POST
    Headers: Content-Type: application/json
    Body: {"name":"test","slug":"test","parentCategory":null,"isVisible": true}
    
    ```
    
    _Update a category:_
    ```
    URL: http://rest.dev:81/category/<ID>?access_token=<ACCESS_TOKEN>
    Method: PUT | PATCH
    Headers: Content-Type: application/json
    Body: {"name":"test","slug":"test","parentCategory":1,"isVisible": false}
    
    ```
    
    _Delete a category:_
    ```
    URL: http://rest.dev:81/category/<ID>/?access_token=<ACCESS_TOKEN>
    Method: DELETE
    Headers: Content-Type: application/json
    
    ```
