# Welcome to the Call Board source code

## Functions
Record reqs faxed in by PCP for each of the MAs, and keep a record of reqs and kits from the previous week
## Functions ToDo
1. Report off the database
2. More security to ensure data is not messed with
3. More automation

## To add more MAs
To add more people, just edit **index.php and changecallboard.php** and copy the table row for one person and paste it under the last entry. Replace the copied name with the new name. Do this in both files and you are good to go
# WARNING - EACH MA MUST BE UNIQUE/HAVE A UNIQUE NAME
For instance, if "Scott" was on the board and there was a new hire for another "Scott", you would need to add the first letter of his last name (IE "Scott S")
Each entry in the database uses the name as the main lookup key to store the data. So if there are multiple rows with the same name (IE "Scott" and new "Scott") would be added together even though they are two different MAs
