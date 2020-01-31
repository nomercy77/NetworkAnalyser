# NetworkAnalyser
Data Packet Processing using Shell Scripts, writing of the same into mysql database after segregation via tcpdump and script commands on network established over LAN on a Linux based system (Ubuntu 18.04).

vim dump :: open new vi editor for writing shell script.You need to press 'I' (insert) to start writing or editing on script.Now if required to write a plain script to be run on terminal it starts with
#! /bin/bash
After writing script press esc then: wq to save your work.
Before executing we will be required to change file permission using 'chmod'.
Then to execute write '. /dump' on terminal. (Assuming file name to be dump)

Grep: (searching for a pattern) to search for all IP packets and put them into a separate file.

Cut: (slitting a file vertically) to appropriately cut the data into file so that they can be written into database.

Paste: (pasting files) to paste all cut files to one so that they can be loaded directly to database.

tee: (creating a tee) to save into file after cut paste etc.

Sort: (ordering a file) for use in top talker to order the ip packets
Option n compare according to string numeric value and option r sort in reverse order.

uniq: (locate repeated and non-repeated lines) to count number of packets for top talker and remove duplicate entries.

DATA STORAGE: After processing data is needed to be stored into MySQL database.

It does so by using the following sql commands.
1.	CREATE DATABASE dump
2.	USE dump
3.	CREATE TABLE table name(table attributes)
4.	SHOW TABLES
5.	LOAD DATA LOCAL INFILE “filename” INTO TABLE “table name”

Clearly database is first created then used in which table is created and then the file is loaded to that table.

USER INTERFACE: This is next and very essential part of monitoring tool. It is implemented using php.

First page is “HOME” page: Here you need to sign up wth a valid username and password.
*Now if you enter the correct credentials and click on the login button then the following page below will be displayed:


Choose the protocol you need to view. From drop down menu choose whatever you wish to search. Again if you wish to go back to “HOME” page then you can click on HOME link given at the top along with link of help page and about traffic analyser page.
After filling entries if you now wish to submit the query or say, view the result then click on submit button.

This does the Protocol based anahysis: TCP, UDP, ARP and other header based filters.











