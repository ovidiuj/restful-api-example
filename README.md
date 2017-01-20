This is a simple project to provide a RESTful API to manage categories for an e-commerce website.

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
* Clients can update the visibility status of a specific category.

## Technical constraints:
