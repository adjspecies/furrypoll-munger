#!/usr/bin/env bash

# Set the root password for mysql databases to 'vagrant'
debconf-set-selections <<< 'mysql-server-5.5 mysql-server/root_password password vagrant'
debconf-set-selections <<< 'mysql-server-5.5 mysql-server/root_password_again password vagrant'

apt-get update

# Easy way to get the whole stack up for investigation through a browser.
apt-get install -y \
    git ipython python-virtualenv libpython-dev python-dev \
    mysql-server postgresql libmysqlclient-dev libpq-dev \
    mongodb language-pack-en

# Create a python virtualenv for data exploration
if [ ! -d /home/vagrant/.venv ]; then
    virtualenv /home/vagrant/.venv
    /home/vagrant/.venv/bin/pip install -r /vagrant/etc/requirements.pip
    chown -R vagrant /home/vagrant/.venv
fi

# Attempt to fetch data from private repo
if [ ! -d /vagrant/etc/survey-data ]; then
    git clone --depth 1 https://bitbucket.org/adjspecies/furrysurvey-data.git /vagrant/etc/survey-data
fi

# Attempt to fetch survey from remote repo
if [ ! -d /vagrant/etc/furrypoll2015 ]; then
    git clone https://github.com/adjspecies/furrypoll.git --depth=1 /vagrant/etc/furrypoll2015
    pushd /vagrant/etc/furrypoll2015
    git checkout 2015_FINAL
    /home/vagrant/.venv/bin/pip install -r requirements.pip
    touch __init__.py
    popd
fi

if [ ! -d /vagrant/etc/furrypoll2016 ]; then
    git clone https://github.com/adjspecies/furrypoll.git --depth=1 /vagrant/etc/furrypoll2016
    pushd /vagrant/etc/furrypoll2016
    git checkout 2016_FINAL
    /home/vagrant/.venv/bin/pip install -r requirements.pip
    touch __init__.py
    popd
fi

# Load mysql databases
if [ ! -f /var/log/mysqlsetup ]; then
    # Create a vagrant user
    echo "create user 'vagrant'@'localhost'" | mysql -uroot -pvagrant

    # Create databases
    echo "create database furrypoll2009_2012" | mysql -uroot -pvagrant

    # Grant permissions to vagrant
    echo "grant all on furrypoll2009_2012.* to 'vagrant'@'localhost'" | mysql -uroot -pvagrant
    echo "flush privileges" | mysql -uroot -pvagrant

    # Load data
    mysql -uvagrant furrypoll2009_2012 < /vagrant/etc/survey-data/furrypoll2009.sql
    mysql -uvagrant furrypoll2009_2012 < /vagrant/etc/survey-data/furrypoll2010.sql
    mysql -uvagrant furrypoll2009_2012 < /vagrant/etc/survey-data/furrypoll2011.sql
    mysql -uvagrant furrypoll2009_2012 < /vagrant/etc/survey-data/furrypoll2012.sql

    touch /var/log/mysqlsetup
fi

# Load postgres databases
if [ ! -f /var/log/pgsetup ]; then
    # Create a vagrant user
    su postgres -c "createuser -s vagrant"

    # Create database
    su vagrant -c "createdb furrypoll2013"

    # Load data
    su vagrant -c "psql furrypoll2013 -f /vagrant/etc/survey-data/furrypoll2013.sql"

    # Ensure postgres starts on boot
    update-rc.d postgresql defaults

    touch /var/log/pgsetup
fi

# Load mongo databases
if [ ! -f /var/log/mongosetup ]; then
    # Load data
    mongorestore --drop -d furrypoll_2015 /vagrant/etc/survey-data/furrypoll_2015/
    mongorestore --drop -d furrypoll_2016 /vagrant/etc/survey-data/furrypoll_2016/

    touch /var/log/mongosetup
fi

# Append bashrc
if [ `grep --quiet BASH_RC_APPENDED /home/vagrant/.bashrc` ]; then
    cat /vagrant/etc/bashrc >> /home/vagrant/.bashrc
fi
