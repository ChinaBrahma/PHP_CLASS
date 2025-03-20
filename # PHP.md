# 18-Mars-2025
# PHP

Definition: Server Side Scripting Language

1. Collect form data
2. Create, Update, Delete  file on Server
3. Update database
4. Dynamic webpage
5. Provide response to client

## Server: (To run php we need a server)
    Apache - Web Server
    All webserver runs on : 8084
    Eg:
        1. Glassfish: 8080
        2. nginx: 8080
        3. Apache: 8080
    Default address: http://loaclhost:8080
## Database:
    Mysql(Database Server):3306

### FileSystem vs DBMS


# PHP Code Structure
* HTML
* CSS
* JS
* PHP

# 19-Mars-2025

# Assessment on PHP

    1. Variables
    2. Scope of Variables
    3. Datatypes

## Examples
```php
<?php
$name = "Ravi";
$age = 24;
echo ${name};
echo ${age};
?>
```

# **Scope of Variables in PHP**

PHP has different types of variable scopes, which define where a variable can be accessed within a script. The three main types are:

1. **Local Scope**
2. **Global Scope**
3. **Static Scope**

---

## **1. Local Scope**
Variables declared inside a function are considered **local** to that function and cannot be accessed outside of it.

### **Example of Local Scope**
```php
<?php
    function myTest() {
        $x = 10; // Local variable
        echo "Value of x: $x <br>"; // Accessible within the function
    }

    myTest();
    
    // echo $x; // ERROR: Undefined variable $x because it's local to the function
?>
```
### **Explanation:**  
- `$x` is a local variable to `myTest()`, so it cannot be accessed outside the function.

---

## **2. Global Scope**
A variable declared **outside** of a function is considered **global**. By default, global variables **cannot be accessed inside functions** unless explicitly specified using the `global` keyword or `$GLOBALS` array.

### **Example of Global Scope**
```php
<?php
    $y = 90; // Global variable

    function myTest() {
        global $y; // Accessing global variable inside function
        echo "Value of y: $y <br>";
    }

    myTest();
    echo "Value of y outside function: $y <br>"; // Accessible here
?>
```
### **Explanation:**  
- `$y` is defined outside the function, making it a global variable.
- Inside `myTest()`, we use `global $y;` to access the global variable.

### **Using `$GLOBALS` Array**
Instead of `global`, you can also use `$GLOBALS` array:
```php
<?php
    $a = 50;

    function test() {
        echo "Value of a using GLOBALS: " . $GLOBALS['a'] . "<br>";
    }

    test();
?>
```
### **Explanation:**  
- `$GLOBALS['a']` gives access to the global variable `$a` inside the function.

---

## **3. Static Scope**
Normally, when a function ends, its local variables are destroyed. However, if a variable is declared **static**, it retains its value between function calls.

### **Example of Static Scope**
```php
<?php
    function countCalls() {
        static $count = 0; // Static variable
        $count++;
        echo "Function called $count times <br>";
    }

    countCalls();
    countCalls();
    countCalls();
?>
```
### **Explanation:**  
- `$count` is declared as `static`, so it is not destroyed after the function call.
- It retains its value between calls and keeps incrementing.

---

## **Summary Table**
| Scope    | Defined Inside Function? | Accessible Outside Function? | Retains Value Between Calls? |
|----------|-------------------------|------------------------------|------------------------------|
| **Local**  | ✅ Yes  | ❌ No | ❌ No |
| **Global** | ❌ No  | ✅ Yes (outside function) | ❌ No |
| **Static** | ✅ Yes  | ❌ No | ✅ Yes |

---
# DataTypes

* String | Eg:- $x = "Ravi";
* Int   | Eg:- $x = 20;
* float | Eg:- $x = 25.50;
* boolean | Eg:- $x = true
* Array | Eg:- $x = ("China", "Hatorki","Jani");

# PHP var_dump() Function

The var_dump() function in PHP is used to display structured information about variables, including their type and value.
```php
$x = "Hatorki"
var_dump($x) // it will give "sting" as output
```




    
