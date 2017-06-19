# Mask String PHP Function
Link: http://maskstringphp.epizy.com/function.php

Simple PHP Function File which takes in a string and masks any sensitive data by replacing it with a series of *'s.<br>
A demo running this file can be found at the link above.

## Description
The PHP function in the file does the following:
- A string parameter is passed to it. A hard-coded sample string has been included in the file to show the format of said string.
- The function parses the string and masks sensitive data (ie. replaces it with a * symbol) based on preset fields such as “cardNumber”, “cardExpiry”, etc.
- The function returns the parsed string in the same format that it was provided but with masked data.

## Assumptions
- The input data string is already properly formatted, with each piece of data and its description placed on a new line.
- The term "Sensitive Data" mainly refers to credit card data, and thus are the only pieces of data that have been censored, as the other pieces of data seem either common or are necessary for to the user.
