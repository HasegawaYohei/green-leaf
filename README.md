# Abstract

This is a repository to start developing a wordpress system quick and fast.
Aimed for Wordpress team developing and continuous integration. 

# Handy points
1. Using Docker-compose for one command Wordpress set up.

	- The `docker-compose.yml` are based on the repository below.
	- https://github.com/visiblevc/wordpress-starter

	- Edit docker-compose.yml if you want some plugins installed on running.

2. It uses WP Pusher for CI.
	- Enables automatic deployment of themes when setup is correct
	- https://wppusher.com/

3. Sample articles already in it.
4. Using understrap for starter theme.
	- https://github.com/understrap/understrap

# Preparation
1.  Install and run Docker.
	- For OS X 10.10.3 Yosemite or newer : <a href="https://docs.docker.com/docker-for-mac/#/what-to-know-before-you-install" target="_blank" rel="nofollow">Docker for mac</a>
	- For Win10 Pro 64bit : <a href="https://docs.docker.com/docker-for-windows/" target="_blank" rel="nofollow">Docker for Windows</a>
		1.  **For Win10 64bit Pro**(Pro version required), after installation, click the whale icon and go to Settings. **(Very important)**
		2.    Go to **"Shared Drives" and click the drive that you "git clone"d.** Recommending C drive for now (So "git clone" to some where in C. Maybe somewhere under User/name/ to avoid hassle).

	- For other OS : <a href="https://docs.docker.com/toolbox/overview/" target="_blank" rel="nofollow">Docker Toolbox</a>
		- For other OS, from now on, when using docker, use Docker Quickstart Terminal. 
		- Run `docker-machine ssh default -L 8080:localhost:8080`.
		- Make a working directory to clone the repository under C:User/{your-name}
	
4. Clone the repository to your desired working directory.
6. Run below to isntall packages. (Install Node before this if you haven't.)
```bash
cd clientTheme
npm install
```

# Start Docker contatiner.
1. Make sure you are not using localhost:8080 or 3000 port with any other container or web server.
2. Make sure you are not using container named "wpcontainer" or "dbcontainer".
3. Do ```docker-compose up``` in the directory that has docker-compose.yml in it.
3. **In a different terminal of above**, run below to edit css on the fly and live reload the browser.
```
cd clientTheme
gulp watch-bs
```

**That's it. Simple.**

----------

By `docker-compose up`, below should show up in the terminal eventually.
```
wpcontainer | =======================================
wpcontainer | WordPress Configuration Complete!
wpcontainer | =======================================
```
**The message would stop here** so open up <a href="http://localhost:3000" target="_blank" rel="nofollow">localhost:3000</a> in a browser. A front page should open.
- To stop stope the container, ctrl+c 
- To remove and restart, ```docker-compose down``` 
	- Restart required if 

# Login Info

To login, open up  <a href="http://localhost:8080/wp-admin" target="_blank" rel="nofollow">localhost:8080/wp-admin</a>. Use info below to login.

User: root

Pass: root

# Preperation for Continuous Integration

- Enable the WP Pusher plugin and install the theme following the instructions below.
	- http://docs.wppusher.com/article/6-getting-started
	- http://docs.wppusher.com/article/13-working-with-plugins-and-themes


# How to develop theme

Using Source Tree.

0. Checkout `origin/develop` branch from remote.
1. Create `feature/foo` branch from `develop` . (Win: shift + alt + f, Mac: command + alt + f)
2. `docker-compose up` 
3. Edit the files in `./clientTheme`. (This would be like wp-content/themes/clientTheme in production environment. It is brought to the top directory by editing docker-compose.yml)
4. If the the db is changed, run `docker exec wpcontainer sh -c 'sudo -u www-data wp db export /data/init.sql'`. This will dump the sql and this sql would be used for initializing sql when `docker-comnpose up`.
5. Commit and push `feature/foo` you have made.
6. Send pull request to `origin/develop` branch from `feature/foo` on github. (Win: shift + alt + p, Mac: ⌘ + ⌥ + p).

----

## Which files to edit

### CSS and Sass Files

- Your design goes into: `/sass/theme`. 
	- Add your styles to the `/sass/theme/_theme.scss` 
	- Add your variables to the `/sass/theme/_theme_variables.scss`.
		- Or add other .scss files into it and `@import` it into `/sass/theme/_theme.scss`.

	- For further info of css and sass files, look below.
		- https://github.com/understrap/understrap#confused-by-all-the-css-and-sass-files


----------

# Further Info
Below are not needed if you just want go on developing. Text based on the [forked repository](https://github.com/visiblevc/wordpress-starter).

### Syncing directories between container and local

In order to save the changes made in the container, change or add the lines below in `docker-compose.yml`. 

```
    volumes:
      - ./initialSql:/data
      - ./clientTheme:/app/wp-content/themes/clientTheme
      - ./plugins:/app/wp-content/plugins
```


### Working with databases

If you have an exported `.sql` file from an existing website, drop the file into the `initSql/` folder. The first time you run the container, it will detect the SQL dump and use it as a database. If it doesn't find one, it will create a fresh database.

If you want to create a dump of your development database, you can run:
```
docker exec wpcontainer sh -c 'sudo -u www-data wp db export /data/init.sql'
```

Finally, sometimes your development environment runs on a different domain than your live one. The live will be `example.com` and the development `localhost:8080`. This project does a search and replace for you. You can set the `SEARCH_REPLACE: example.com,localhost:8080` environment variable in the `docker-compose.yml`.

### Use `wp-cli`

Follow the example below. Basically, change after "wp".

```
docker exec wpcontainer sh -c 'sudo -u www-data wp db export /data/init.sql'
docker exec wpcontainer sh -c 'sudo -u www-data wp theme activate clientTheme'
```
