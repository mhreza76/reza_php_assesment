# reza_php_assesment

### Task Description:
We are sure that you are an awesome coder. We are having 3 problems that we need your help
to resolve. So, we will be looking forward for your solution.
We need a small application & if we call a URL with the question number as a parameter, we
will be able to find that solution.
Your Application URL Example for all the 3 problems:
1. {your_base_url}/solution/1
2. {your_base_url}/solution/2
3. {your_base_url}/solution/3  

Here parameter ‘1,2,3’ are the problem numbers.
For this you need to build a small application that will solve these 3 problems. As you know,
now a days everything is about standards. So, we hope to get flavor of OOP/MVC/PSR4 in your
application. You can build a mini library as well which will resolve the problems for you.
The folder name of your application should be your full name with “_”.
Example: “arifur_rahman”.  
So, if we hit arifur_rahman/solution/1, we should get the solution for Problem-1.  



### Problem – 1:
We have a set of data in the following url: http://103.219.147.17/api/json.php
From this data we need to find the speeds those have crossed 60. The result should contain the list &
the total number of speeds those have crossed 60.
You can use below curl request if you want

```php
$ch = curl_init('http://103.219.147.17/api/json.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
$response = curl_exec($ch);
curl_close($ch);
```
#### Expected Output:
```output
Total: (int)“Total count of the speeds those crossed 60”

List:
64
68
76
79
```

### Problem – 2:
We have an array like
```php
array('0'=>'z1', '1'=>'Z10', '2'=>'z12', '3'=>'Z2', '4'=>'z3')
```
We need to sort this. You can use this given array for your sorted solution.
Expected Output:  
```php
array('0'=>'z1', '3'=>'Z2', '4'=>'z3', '1'=>'Z10', '2'=>'z12')
```

### Problem – 3:
We need to validate any IP address.
We are sure that you can write a logic to validate any IP address and return true if valid and false if
invalid. We hope to see that you do this without any built-in function.  
Input:
```php
192.168.0.1
```
Expected Output:  
```php
TRUE
```