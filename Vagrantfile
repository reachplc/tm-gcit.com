# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|

  config.vm.box = "vagrant-debian-jessie"
  config.vm.box_url = "http://localhost/vagrant/vagrant-debian-jessie.json"
  config.vm.box_version = "1.0.0"

  config.vm.synced_folder "./",
  												"/vagrant",
  												create: true,
  												owner: "vagrant",
  												group: "www-data",
  												mount_options: ["dmode=755,fmode=664"]
  config.vm.synced_folder "./html/media",
  												"/vagrant/html/media",
  												owner: "www-data",
  												group: "www-data",
  												mount_options: ["dmode=755,fmode=664"]

  config.vm.hostname = "tm-gcit.dev"
  config.ssh.shell = "bash -c 'BASH_ENV=/etc/profile exec bash'"
  config.ssh.forward_agent = true
  config.ssh.insert_key = false

  config.vm.network "private_network", ip: "192.168.33.100"
  config.hostsupdater.aliases = ["www.tm-gcit.dev"]

  config.vm.provision "shell", path: "scripts/provision.sh"

end
