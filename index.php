<?php
/**
 * Created by PhpStorm.
 * User: Marco D'Amico
 * Date: 12/02/16
 * Time: 21.00
 */
?>

<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>REGULAR EXPRESSIONS</title>
</head>
<body>
<h1>REGULAR EXPRESSIONS</h1>
<h2>
    A regular expression (regex or regexp) is a special text string for describing a search pattern,
    mainly for use in pattern matching with strings, or string matching
</h2>

<h3>Script that checks if a string contains another string</h3>
<pre name="code">
&lt;?php
$pattern = '/[^\w]magic\s/';
if (preg_match($pattern, 'Show a little faith, there's magic in the night'))
{
    echo "'magic' is present...";
}
else
{
    echo "'magic' is not present...";
}
?&gt;
</pre>


<h3>Script that removes the last word from a string</h3>
<p>
    <em>Sample string :</em> 'Show a little faith, there\'s magic in the night'
    <br />
    <em>Expected Output :</em> Show a little faith, there's magic in the<br>
</p>
<pre name="code">
&lt;?php
$str1 = 'Show a little faith, there's magic in the night';
echo preg_replace('/\W\w+\s*(\W*)$/', '$1', $str1);
?&gt;
</pre>


<h3>Script that removes the whitespaces from a string</h3>
<p>
    <em>Sample string :</em> 'Born to run'
    <br />
    <em>Expected Output :</em> Borntorun<br>
</p>
<pre name="code">
&lt;?php
$str1 = 'Born to run';
echo preg_replace('/\s+/', '', $str1);
?&gt;
</pre>


<h3>Script to remove non numeric characters except comma and dot</h3>
<p>
    <em>Sample string :</em> '$11,399.00A'
    <br>
    <em>Expected Output :</em> 11,399.00<br>
</p>
<pre name="code">
&lt;?php
$str1 = "$11,399.00A";
echo preg_replace("/[^0-9,.]/", "", $str1);
?&gt;
</pre>


<h3>Script to remove new lines (characters) from a string</h3>
<em>Sample strings </em>:<em> &quot;Tramps like us\nbaby, we were born to run\n&quot;</em><br>
<em>Expected Output </em>: &quot;Tramps like us baby, we were born to run&quot;<br>
</p>
<pre name="code">
&lt;?php
$str = "Tramps like us\nbaby, we were born to run\n";
echo preg_replace('/\s+/', ' ', trim($str));
?&gt;
</pre>


<h3>Script to extract text (within parenthesis) from a string</h3>
<em>Sample strings </em>:<em> 'New York City serenade [Bruce Springsteen].'</em><br>
<em>Expected Output </em>: 'Bruce Springsteen' <br>
</p>
<pre name="code">
&lt;?php
$my_text = 'New York City serenade [Bruce Springsteen].';
preg_match('#\[(.*?)\]#', $my_text, $match);
print $match[1];
?&gt;
</pre>


<h3>Script to remove all characters from a string except a-z A-Z 0-9 or " "</h3>
<p>
    <em>Sample string : abcde$ddfd @abcd )der]
        <br>
        Expected Result  : </em>abcdeddfd abcd der<br>
</p>
<pre name="code">
&lt;?php
$string = 'abcde$ddfd @abcd )der]';
echo 'Old string : '.$string.'<br />';
$newstr = preg_replace("/[^A-Za-z0-9 ]/", '', $string);
echo 'New string : '.$newstr;
?&gt;
</pre>

</body>
</html>