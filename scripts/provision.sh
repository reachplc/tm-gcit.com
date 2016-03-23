#!/bin/sh
#
# Setup the environment

# Copy site .conf file accross
sudo cp /vagrant/config/environments/development.conf /etc/apache2/sites-available/tm-gcit.dev.conf
sudo rm -rf /var/www
sudo mkdir -p /var/www
sudo ln -fs /vagrant /var/www/tm-gcit.dev
# Enable new virtual host
sudo ln -fs /etc/apache2/sites-available/tm-gcit.dev.conf /etc/apache2/sites-enabled/tm-gcit.dev.conf
# Restart Apache
sudo service apache2 restart
# Setup database
mysql -u root -proot -e "create database tm_gcit"
#mysql -u root -proot wordpress < /vagrant/config/bootstrap.sql
# Install Composer Dependencies
php /usr/local/bin/composer.phar update --working-dir="/var/www/tm-gcit.dev" --no-interaction
# Node
npm -v

# Run scripts to provision theme(s)
#./html/app/themes/theme-start-kit/scripts/provision.sh
