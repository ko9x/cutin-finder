### Current Focus
* Figure out how to create endpoint paths for storage
    * I remember Blake would do some command in terminal that showed a list of routes
        * Maybe we can spin up the noteworthy container and use that command to see the paths Blake created
* Set up the database tables
    * The items table has already been created and I think it should work as is
    * The break-points table still needs to be created
* Set up endpoints
    * we need to be able to hit an endpoint with an object and have all the data get placed in the correct portion of the database
* Figure out how to hit an endpoint and see the database information in the response object on the front-end

* Continue following the tutorial as necessary
    * https://www.twilio.com/blog/get-started-docker-laravel
        * I already created the ItemController but there will be stuff we reference going forward

### Done
* Track this project with GitHub!
    * Set it up in Source Tree!
* Figure out how to stop tracking postgres-data folder when spinning up and down docker
    * right click on the file you don't to track in source tree and select ignore from the dropdown
        * It gives lots of options but I wanted to to ignore all files inside postgres-data so that is what I selected
* Set up Sequel Pro to show this database
