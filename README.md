# PHP: Unexpected Behavior with Undefined Array Keys

This repository demonstrates a common yet subtle issue in PHP related to handling undefined array keys.  When accessing a non-existent array key, PHP does not always throw an error, instead it returns NULL, which can cause unexpected behavior and difficult-to-track bugs. This example also points out issues with array_key_exists() in detecting whether or not an array key actually exists. 

The `bug.php` file showcases the problem, while `bugSolution.php` offers a solution using the null coalescing operator and stricter checks.  This is important to understand as it can lead to unexpected results and security vulnerabilities if not handled properly.