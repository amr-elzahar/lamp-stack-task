# LAMP Stack Applicaion

### Introduction

his PHP application is a simple example of LAMP Stack. It connects to a MySQL database and store visitor IP addresses and timestamps in the database. The application retrieves the database connection details from environment variables defined in a .env file, and uses the mysqli extension to connect to the database.

### Requirements

To run this application, you will need:

- Apache web server
- PHP
- The mysqli extension for PHP
- The vlucas/phpdotenv package for PHP

### Installation

We need to install the following:

- apache2 mysql-server php libapache2-mod-php php-mysql

- vlucas/phpdotenv

And the whole process is explained in much more details in the PDF file.

### Usage

To use the application, navigate to the URL of the index.php file on your web server in your web browser. The application will retrieve your IP address and the current time, and store them in the database if your IP address is not already in the database. If your IP address is already in the database, the application will retrieve your IP address and the time of your last visit from the database and display them on the screen.

## Networking Basics

### IP Address:

An IP address is a unique identifier assigned to each device connected to a network that uses the Internet Protocol for communication. It is a numerical label that identifies the device's network interface and allows it to communicate with other devices on the network. IP addresses are essential for routing data packets between devices on the internet.

### MAC Address

A MAC (Media Access Control) address is a unique identifier assigned to the network interface controller (NIC) of a device. It is a hardware address that is assigned by the manufacturer and is used to identify the device on a local network. MAC addresses are used to ensure that data packets are delivered to the correct destination device.

### Switches:

A switch is a network device that connects devices together on a local area network (LAN). It operates at the data link layer of the OSI model and is used to forward data between devices on the same network. Switches learn the MAC addresses of devices connected to them and use this information to forward data packets to the correct destination device.

### Routers:

A router is a network device that connects multiple networks together and routes data packets between them. It operates at the network layer of the OSI model and uses IP addresses to determine the best path for data packets to take between networks. Routers are essential for connecting devices on different networks, such as connecting a local network to the internet.

### Routing Protocols:

Routing protocols are used by routers to determine the best path for data packets to take between networks. There are several routing protocols, including OSPF, BGP, and RIP, each with its own strengths and weaknesses. Routing protocols use different metrics, such as hop count or link speed, to determine the best path for data packets.

### SSH Connection:

1. Generate a public-private key pair on your local machine using a tool like ssh-keygen. This command will generate a public and private key pair in the default location ~/.ssh/id_rsa:

```
 ssh-keygen
```

2. Copy the public key to the cloud instance's authorized_keys file under ~/.ssh directory.

3. Once the public key is added to the authorized_keys file, you can SSH to the cloud instance using the private key generated in step 1. The -i option specifies the private key file to use for authentication:

```
ssh -i ~/.ssh/id_rsa username@public_ip_address
```

Replace username with the username for the cloud instance and public_ip_address with the public IP address of the instance.

NOTE: Note that some cloud providers may require you to add the public key to the instance via their web console or API.
