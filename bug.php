```php
function processData(array $data): array {
  // ... some code to process $data ...

  return $data;
}

$data = [1,2,3,4,5];

//Incorrect usage of the function will cause an unexpected result
$processedData = processData($data);

print_r($processedData); //Outputs: Array ( [0] => 1 [1] => 2 [3] => 4 [4] => 5 )

//Expected Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
```