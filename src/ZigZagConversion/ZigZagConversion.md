# Zigzag Conversion
The string "PAYPALISHIRING" is written in a zigzag pattern on a given number of rows like this: (you may want to display
this pattern in a fixed font for better legibility)
<table>
    <tr>
        <td>P</td>
        <td></td>
        <td>A</td>
        <td></td>
        <td>H</td>
        <td></td>
        <td>N</td>
    </tr>
    <tr>
        <td>A</td>
        <td>P</td>
        <td>L</td>
        <td>S</td>
        <td>I</td>
        <td>I</td>
        <td>G</td>
    </tr>
    <tr>
        <td>Y</td>
        <td></td>
        <td>I</td>
        <td></td>
        <td>R</td>
        <td></td>
        <td></td>
    </tr>
</table>
And then read line by line: "PAHNAPLSIIGYIR".
Write the code that will take a string and make this conversion given a number of rows:

``string convert(string s, int numRows);``

### Example 1
Input: s = "PAYPALISHIRING", numRows = 3, Output: "PAHNAPLSIIGYIR"

### Example 2
Input: s = "PAYPALISHIRING", numRows = 4, Output: "PINALSIGYAHRPI"

Explanation:
<table>
    <tr>
        <td>P</td>
        <td></td>
        <td></td>
        <td>I</td>
        <td></td>
        <td></td>
        <td>N</td>
    </tr>
    <tr>
        <td>A</td>
        <td></td>
        <td>L</td>
        <td>S</td>
        <td></td>
        <td>I</td>
        <td>G</td>
    </tr>
    <tr>
        <td>Y</td>
        <td>A</td>
        <td></td>
        <td>H</td>
        <td>R</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>P</td>
        <td></td>
        <td></td>
        <td>I</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>

### Example 2
Input: s = "A", numRows = 1, Output: "A"

### Constraints:
<ul>
<li>1 <= s.length <= 1000</li>
<li>s consists of English letters (lower-case and upper-case), ',' and '.'.</li>
<li>1 <= numRows <= 1000</li>
</ul>