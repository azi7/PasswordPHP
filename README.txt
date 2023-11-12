# Simple Password Validation Project

This PHP project includes a function, `SimplePassword`, designed to determine whether a given string meets specific criteria for a valid password.

## Password Constraints

The password must satisfy the following constraints:

- It must contain at least one capital letter.
- It must include at least one numerical digit.
- It should have at least one punctuation mark or mathematical symbol.
- The word "password" should not be present in the string.
- It must be longer than 7 characters and shorter than 31 characters.

## How to Use

1. *Function Signature:*
    php
    function SimplePassword($str);
    

2. *Parameters:*
    - `$str`: The string to be checked for password validity.

3. *Return Value:*
    - The function returns the string "true" if the given string satisfies all password constraints; otherwise, it returns "false".

4. *Example Usage:*
    php
    $password = "apple!M7";
    $result = SimplePassword($password);
    echo $result;
    

5. *Note:*
    - Ensure you have PHP installed to run this script.
