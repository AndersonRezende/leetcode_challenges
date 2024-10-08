# String to Integer (atoi)
Implement the myAtoi(string s) function, which converts a string to a 32-bit signed integer.

The algorithm for myAtoi(string s) is as follows:
<ul>
<li>Whitespace: Ignore any leading whitespace (" ").</li>
<li>Signedness: Determine the sign by checking if the next character is '-' or '+', assuming positivity is neither present.</li>
<li>Conversion: Read the integer by skipping leading zeros until a non-digit character is encountered or the end of the string is reached. If no digits were read, then the result is 0.</li>
<li>Rounding: If the integer is out of the 32-bit signed integer range [-2^31, 2^31 - 1], then round the integer to remain in the range. Specifically, integers less than -2^31 should be rounded to -2^31, and integers greater than 2^31 - 1 should be rounded to 2^31 - 1.</li>
<li>Return the integer as the final result.</li>
</ul>

### Example 1
Input: s = "42", Output: 42

### Example 2
Input: s = " -042", Output: -42

### Example 3
Input: s = "1337c0d3", Output: 1337

### Example 4
Input: s = "0-1", Output: 0

### Example 5
Input: s = "words and 987", Output: 0


### Constraints:
<ul>
<li>0 <= s.length <= 200</li>
<li>s consists of English letters (lower-case and upper-case), digits (0-9), ' ', '+', '-', and '.'.</li>
</ul>