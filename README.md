# Convert CSV to XLSX with PHP

First install all dependencies inside the folder ***csv-to-xlsx***.
```bash
composer install
```


The important folder is the ***csv-to-xlsx***. You will need to put it inside your project.

After that, for converting your csv file, first you need to require my conversion script. Example:
```php
require 'csv-to-xlsx/conversion-script.php';
```
Then you just need to call the function **conversion_csv_to_xlsx**. If the csv file is in the same folder as your script, you just need to put the file name without path.