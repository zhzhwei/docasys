# DOCASYS

DOCASYS is an extension, using the [extension_builder Extension](https://extensions.typo3.org/extension/extension_builder/), of the [TYPO3 CMS](https://typo3.org/) realizing technical aspects of [SFB/Transregio 96 research project](https://transregio96.webspace.tu-dresden.de/).

## Usage

### Preconditions

- [Git](https://git-scm.com/downloads) is installed and the repo has been cloned locally
- [Docker](https://www.docker.com/) runtime environment is installed and started

### Startup

Use the startup script to build the docker container and start the app.
Simply open a terminal window, navigate the root directory of this repo
(e.g. `cd $HOME/transregio96-docasys/`), type `./start.sh` and press enter.

After the containers have been build and started, which is indicated by the
name of the container suffixed with *done*, open a browser window
and navigate to <http://localhost/typo3/>. Use username `user26` and
password `user26` for authentication. This user has admin rights.

### Shutdown

Use the shutdown script to stop the running docker containers.
Simply open a terminal window, navigate the root directory of this
repo (e.g. `cd $HOME/transregio96-docasys/`), type `./stop.sh` and 
press enter. Wait a moment until the command executed successfully.

## Configuration

The locations to setup and configure the database in general (relative path from
repo root directory) are:

- `docker-compose.yml`: See service *docasys-db* for database configuration
and initialization
- `app/typo3/typo3conf/LocalConfiguration.php`: See array *DB* for database configuration

Note: All users except `user26` have been removed from the database dump. For security 
reasons the database password has been changed too.
