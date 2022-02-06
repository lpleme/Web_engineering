<?php
     // create a PHP object with the filename,filetype, and cwd properties.
     class fileN
     {
        public $fileName;
        public $fileType;
        public $cwd;
     }

     $cwd = getcwd();     // get path to the current working directory
     $folder = ".";       // Set the folder variable to specify the "current" directory    
     
     // create an array of filenames of files from the current directory
     $files = scandir($folder);
     $directory = Array();     // create a array object to store a list of objects.


     /*******************************************************************************
     *  Start your PHP code here!
     *
     * Add code to populate the "$directory" array with a list of "fileN" objects.
     * Use "new fileN()" to create a fileN object.    $directory[$i] = new fileN();
     * Set each fileN object property to the appropriate values.
     * You can get each file name from the "$files" array.
     * You can get each file type by calling the php function "filetype()" passing it the filename.
     * The "filetype()" function returns the file type. The returned file type is either "file" or "dir".  
     * The current working directory has been stored in $cwd.
     * To get the size of an array in php use the sizeof function:  $len = sizeof($files);
     *****************************************************************/
     
    foreach ($directory as $fileN) {
      if (property_exists ($this, $key)){
         $this ->{$key} = $fileN;
      }
    }
    
    $fileN = new fileN();
    
    $directory = Array($fileName, $fileType, $cwd);
    
    
    #Creating fileType()
    fileType() == $fileType;

  
    if (fileType == 'file'){
      echo 'file';}
    else {
      echo 'dir';}
   
     
     
     #$directory[]=('assign02.html, file, /home/Joh0801/public_html/');
     #$directory[]=('assign03.html, file, /home/Joh0801/public_html/');
     #$directory[]=('me.jpg, file, /home/Joh0801/public_html/');
     #$directory[]=('images, file, /home/Joh0801/public_html/');
     
     
     #$directory = Array();
         #Array("assign02.html","file", "/home/Joh0801/public_html/");
         #Array("assign03.html", "file", "/home/Joh0801/public_html/");
         #Array("me.jpg", "file", "/home/Joh0801/public_html/");
         #Array("images", "file", "/home/Joh0801/public_html/");



     
     
     /*******************End of your Code *******************************************/

     // convert the PHP array of objects to a JSON string
     $str = json_encode($directory);
     print "\n $str \n";   //output the json string - The string is sent to the browser.  
 ?>

