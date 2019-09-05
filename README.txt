## Flespakket Prestashop is archived, look at the following link for the latest version of the MyParcel plugin. https://github.com/myparcelnl 
                       
-------------------------------------------
------   Flespakket Magento plugin   ------
------                               ------
------  install guide version 1.1.1  ------
-------------------------------------------

Tested on Magento CE 1.4.2, 1.5.1, 1.6.2, 1.7.0, 1.8.1, 1.9.0

If you are updating from a previous version, follow the install guide and overwrite the old files.


----------------   STEP 1   ----------------
Check if the compiler is disabled:
System > Tools > Compiler


----------------   STEP 2   ----------------
Copy all the files into your HTTP Magento root.
(usually called something like httpdocs or html)


----------------   STEP 3   ----------------
When uploading is finished, logout and login your Magento backend.
This will solve permission errors for the new configuration page.


----------------   STEP 4   ----------------
Empty the cache:
System -> Cache Management -> Flush Cache Storage


----------------   STEP 5   ----------------
If you disabled the compiler in step 1, enable it again.


----------------   DONE !   ----------------





-------------------------------------------
------   Flespakket Magento plugin   ------
------                               ------
------        uninstall guide        ------
-------------------------------------------

To uninstall the Magento plugin:

- Remove all files copied in STEP 1
- Empty the cache (in the admin panel): System -> Cache Management -> Flush Cache Storage
