# My Great Learning - Video Skipper - Hack

This Project will help you to skip the videos without watching it.

## Prerequired

 - [XAMPP](https://www.apachefriends.org/download.html)
 - [mygreatlearning.com Account](http://mygreatlearning.com/)

## Authors

- [Venkatesh S](https://www.linkedin.com/in/venkatesh-s-5667251bb/)

## How To Use

![App Screenshot](https://raw.githubusercontent.com/Venkatesh-KCET/MyGreatLearning-Video-Skipper/main/steps.png)

### Copy Content

- Open Chrome
- Login in to https://www.mygreatlearning.com/
- Enroll in some free courses
- Open DevTools by pressing Control+Shift+J. The Console panel opens.
- Click the Network tab. The Network panel opens. [1]
- Refresh The Page
- Click the Fetch/XHR tab. [2]
- Click on `modules?include[]=items` [3]
- Click on Response tab 
- Copy the text below [4]

### Copy User id 
- Note the integer number after `user_id=`

### Install Chrome Externsion 
- [Ignore X-Frame headers](https://chrome.google.com/webstore/detail/ignore-x-frame-headers/gleekbfjekiniecknbkamfmkohkpodhe)

### How To Use????
- Paste the content in `module.json` file
- Open the `index.php` file using localhost
- Enter Your `user_id`
- Click Submit

Your Video will be automatically seen by this code.
