* Make some notes about this process in MyNotes!

### Running the project

* Make sure Docker Desktop is running

* To spin up the docker container, navigate to the root directory of this project in terminal and run this command:
    * `docker compose up -d`
* To shut down the docker container, navigate to the root directory of this project in terminal and run this command:
    * `docker compose down`

### Other useful commands

* To ssh into the php-apache docker container, navigate to the root directory of this project in terminal and run this command:
    * `docker exec -it php-apache bash`
        * To exit the ssh just type `exit` followed by the return key
    
* To ssh into the database docker container, navigate to the root directory of this project in terminal and run this command:
    * `docker exec -it database bash`
        * Now that we are using mysql we do most of the database viewing in Sequel Pro
            * The name I gave this project in Sequel Pro is `docker - cutin`
                * The database that holds all the information is `db`

* If you add something to the Dockerfile you need to build it again with this command:
    * `docker compose up -d --build`
        * If the container goes into a restart loop after the build you may need to change the db volume in the docker-compose.yml
            * The volume is cutin-db2 at the time this note was added
            
* If I switch back to postgres for some reason this was a useful command so I wanted to keep it somewhere
    * To ssh into the database docker container, navigate to the root directory of this project in terminal and run this command:
        * `docker exec -it database bash`
            * Then log into the PostgreSQL service with this command:
                * `psql -U postgres cutin-finder`
                    * From here you can do things like run an SQL query on the items table with this command:
                        * `SELECT * FROM items;`
                            * But we should be using Sequel Pro for this kind of stuff because the interface is better

### Notes

* To set up most of this project I followed this tutorial
    * https://www.twilio.com/blog/get-started-docker-laravel

* Since we didn't specify a username in our docker-compose.yml file the database username is "postgres"
    * We did however, specify a password in the docker-compose.yml

* I switched from postgres to mysql mainly to use Sequel Pro

* The volumes path is "./cutin-db2:/var/lib/mysql" because the database container kept going into a restart loop
    * My solution was to keep changing the name
        * initially it was cutin-database then cutin-db then cutin-db1 and finally cutin-db2
            * I'm sure there is a better way but I just wanted to get this working
