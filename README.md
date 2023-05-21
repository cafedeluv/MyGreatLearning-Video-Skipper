MyGreatLearning Video Skipper
=============================

This PHP script allows you to skip videos automatically on MyGreatLearning, enabling you to obtain the certificate more quickly without watching the videos. Please note that using this script may violate the terms of service of MyGreatLearning, and it is your responsibility to use it ethically and in compliance with applicable laws and regulations.

Prerequisites
-------------

Before using this script, make sure you have the following:

*   XAMPP installed on your machine
*   A MyGreatLearning.com account

Authors
-------

*   Venkatesh S ([GitHub](https://github.com/Venkatesh-KCET))

How to Use
----------

1.  Take a screenshot of the application to refer to during the process.
    
2.  Follow the steps below to obtain the necessary information for the script:
    
    *   Open Google Chrome.
    *   Log in to your account on [MyGreatLearning.com](https://www.mygreatlearning.com/).
    *   Enroll in some free courses.
    *   Open DevTools by pressing Control+Shift+J. The Console panel will open.
    *   Click the Network tab. The Network panel will open.
    *   Refresh the page.
    *   Click the Fetch/XHR tab.
    *   Click on `modules?include[]=items`.
    *   Click on the Response tab.
    *   Copy the text content displayed.
    *   Copy the User ID (integer number after `user_id=`).
3.  Install the Chrome Extension to ignore X-Frame headers. This extension helps overcome security restrictions when embedding external content in webpages.
    
4.  Follow the steps below to use the script:
    
    *   Paste the copied content in the `module.json` file in this project.
    *   Open the `index.php` file using localhost (e.g., `http://localhost/mygreatlearning/index.php`).
    *   Enter your User ID (obtained earlier).
    *   Click the Submit button.
    *   The script will automatically simulate video playback, advancing through the content.

Disclaimer
----------

Please use this script responsibly and in accordance with the terms of service of MyGreatLearning. Be aware that using this script to bypass video content may violate the terms of service or policies of MyGreatLearning, and it could have legal consequences. The author and OpenAI do not endorse or promote any illegal or unethical use of this script.

By using this script, you assume all responsibility and liability for any consequences that may arise from its usage.

**Note:** This script was created for educational and experimental purposes only. Use it at your own risk.
