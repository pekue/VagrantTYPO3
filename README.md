Vagrant Config for TYPO3 Flow Development
=========================================

My default Linux box for PHP development with TYPO3 Flow (but should work with other PHP stuff, too).

Installation:
-------------

Install [Vagrant](http://vagrantup.com/) with the installer that fits your hosts operating system.

Download and Install [VirtualBox](http://www.virtualbox.org/)

Clone this repository

	git clone git://github.com/mrimann/VagrantTYPO3Flow.git

Change to the cloned repository

	cd VagrantTYPO3Flow

Boot up the virtual box:

	vagrant up


TODO:
-----

The following stuff is what I want to add to this box:

- NginX
- MySQL
- PHP (FPM)
- phpMyAdmin
- composer

Optional:
---------

- xDebug
- zsh with oh-my-zsh
- git
- nano
- Postfix / Mail-Access for testing Mails