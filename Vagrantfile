# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

    config.vm.box = "ubuntu/xenial64"

    config.vm.network "private_network", ip: "192.168.10.10"

    config.vm.provision "shell", inline: <<-SHELL
        add-apt-repository ppa:ondrej/php
        apt-get update
        apt-get upgrade
        apt-get install -y \
        build-essential \
        mc \
        zip \
        unzip \
        nodejs \
        npm \
        php7.1-cli \
        php7.1-dom \
        php7.1-mbstring \
        php7.1-zip \
        php7.1-curl \
        php7.1-pgsql \
        postgresql \
        postgresql-contrib
        ln -s /usr/bin/nodejs /usr/bin/node
        curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
        echo "cd /vagrant" >> /home/ubuntu/.bashrc
    SHELL

    config.vm.provision "shell", inline: <<-SHELL
        sed -i "s/#listen_address.*/listen_addresses '*'/" /etc/postgresql/9.5/main/postgresql.conf
        echo "host all all all password" >> /etc/postgresql/9.5/main/pg_hba.conf
        sudo -u postgres psql -c "ALTER USER postgres PASSWORD 'postgres';"
        sudo -u postgres createdb symfony
        service postgresql restart
    SHELL

    config.vm.provision "shell", run: "always", inline: <<-SHELL
        cd /vagrant && composer install && bin/console server:start 0.0.0.0:80 --router router.php
    SHELL

    config.vbguest.auto_update = false

end
