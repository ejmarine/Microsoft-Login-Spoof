# Microsoft Login Spoof
Retooled version of Microsoft's login page that can be used in controlled phishing exercises

Intended solely for use in employee training

## Overview

Using code from the Microsoft Login Page and my own modifications, this site functions extremely similarly to the Microsoft Login, but collects the email and password entered via PHP.

Due to content filtering by Google, attempting to publicly host this site will result in your Domain Registrar revoking your Domain Name and your site being flagged.

Users start on the login.html page, input an email, are directed to the password.html page, input a password, and are then redirected to the actual login.

All information is timestamped and stored in the usernames.txt file.

## Examples

### Login Page

Fake:
![image alt <](https://github.com/ejmarine/Microsoft-Login-Spoof/blob/787407ee1184761643f9d5b9bd317e5774eb1f8e/Examples/login_fake.png)
Real:
![image alt >](https://github.com/ejmarine/Microsoft-Login-Spoof/blob/787407ee1184761643f9d5b9bd317e5774eb1f8e/Examples/login_real.png)

### Password Page

Fake:
![image alt <](https://github.com/ejmarine/Microsoft-Login-Spoof/blob/787407ee1184761643f9d5b9bd317e5774eb1f8e/Examples/password_fake.png)
Real:
![image alt >](https://github.com/ejmarine/Microsoft-Login-Spoof/blob/787407ee1184761643f9d5b9bd317e5774eb1f8e/Examples/password_real.png)


img[alt$=">"] {
  float: right;
}

img[alt$="<"] {
  float: left;
}