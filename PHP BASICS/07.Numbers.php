1) INTEGER 
  
   * At least one digit.
   * No decimal pit.
   * either +ve or -ve.
   
   FUNC TO CHECK IF THE TYPE OF THE VARIABLE IS INTEGER OR NOT.

   * is_int()
   * is_integer()
   * is_long()


2) PHP FLOATS

  * With a decimal point or no. in exp form.
 
  FUNC TO CHECK IF THE TYPE OF VARIABLE IS FLOAT OR NOT.

  * is_float()
  * is_double() - alias of is_float()

3)INFINITY

A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.

// PHP_FLOAT_MAX ------>The largest representable floating point number

FUNC TO CHECK IF THE TYPE OF VARIABLE IS FINITE OR INFINITE.
* is_infinite()
* is_finite()

4)PHP NAN
 
  NAN---->Not A Number

  * is_nan()

5)Numerical Strings
  
* is_numeric()  ------> Finds whether a variable is a number or a numeric string.

6) Casting Strings and Floats to Integers.

