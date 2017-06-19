# Mask String PHP Function
Link: ???

Simple PHP Function File which takes in a string and masks any sensitive data by replacing it with a series of *'s.

## Description
The PHP file does the following:
- A string parameter is passed to it - see attached sample input data, you can hardcode it as a string (not an array) in your code.
- The function parses the string and masks sensitive data (replaces it with a * symbol) based on preset fields, such as “cardNumber”, “cardExpiry”.
- The function returns the parsed string in the same format that it was provided, but with masked data.

## Assumptions
- The input data string is already properly formatted, with each piece of data placed on a new line.
- The term "Sensitive Data" mainly refers to credit card data and thus are the only pieces of data that have been censored.
