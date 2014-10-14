# USING THE GIT REPOSITORY

## Setup your own public repository

Your first step is to establish a public repository from which we can
pull your work into the master repository. You have two options: use
GitHub or other public site, or setup/use your own repository.

While you can use a private repository and utilize ``git format-patch`` to
submit patches, this is discouraged as it does not facilitate public peer
review.

### Option 1: GitHub

 1. Setup a GitHub account (http://github.com/), if you haven't yet
 2. Fork the MegaOfficeTool repository (http://github.com/CodingMatters/MegaOfficeTool)
 3. Clone your fork locally and enter it (use your own GitHub username
    in the statement below)

    ```sh
    % git clone git@github.com:<username>/MegaOfficeTool.git
    % cd MegaOfficeTool
    ```

 4. Add a remote to the canonical MOT repository, so you can keep your fork
    up-to-date:

    ```sh
    % git remote add MegaOfficeTool https://github.com/CodingMatters/MegaOfficeTool.git
    % git fetch MegaOfficeTool
    ```

### Option 2: Personal Repository

We assume you will use gitosis (http://git-scm.com/book/en/Git-on-the-Server-Gitosis)
or gitolite (http://git-scm.com/book/en/Git-on-the-Server-Gitolite) to host your
own repository.  If you go this route, we will assume you have the knowledge to
do so, or know where to obtain it. We will not assist you in setting up such a
repository.

 1.  Create a new repository

    ```sh
    % git init
    ```

 2. Add an "origin" remote pointing to your gitosis/gitolite repo:

    ```sh
    % git remote add origin git://yourdomain/yourrepo.git
    ```

 3. Add a remote for the MOT repository and fetch it

    ```sh
    % git remote add MegaOfficeTool https://github.com/CodingMatters/MegaOfficeTool.git
    % git fetch MegaOfficeTool
    ```

 4. Create a new branch for the MOT repository (named "MegaOfficeTool/master" here)

    ```sh
    % git checkout -b MegaOfficeTool/master MegaOfficeTool/master
    ```

 5. Create your master branch off the MegaOfficeTool branch, and push to your
    repository

    ```sh
    % git checkout -b master
    % git push origin HEAD:master