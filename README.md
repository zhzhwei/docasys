# DOCASYS

DOCASYS is an extension of Typo3 CMS realizing technical aspects of [SFB/Transregio 96 research project](http://141.76.19.93/SFBweb/).

## Usage

### Preconditions

- [Git](https://git-scm.com/downloads) is installed and the repo has been cloned locally
- [Docker](https://www.docker.com/) runtime environment is installed

### Startup

Use the startup script to build the docker container and start the app.
Simply open a terminal window, navigate the root directory of this
repo, type `./start.sh` and press enter.

After the containers has been build and started, indicated by the
name of the container and suffixed with *done*, open a browser window
and navigate to <http://localhost/typo3/>. Use username `user26` and
password `user26` for authentication. This user has admin rights.

### Shutdown

Use the shutdown script to stop the running docker containers.
Simply open a terminal window, navigate the root directory of this
repo, type `./stop.sh` and press enter. Wait a moment until the
command executed successfully.

## Configuration

The locations to setup and configure the database in general (relative path from
repo root directory) are:

- `docker-compose.yml`: See service *docasys-db* for database configuration
and initialization
- `app/typo3/typo3conf/LocalConfiguration.php`: See array *DB* for database configuration

Note: All users except `user26` have been removed from the dump. For security reasons
the database password has been changed too.
