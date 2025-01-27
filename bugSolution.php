```php
function processData(array $data): array {
  // ... some code to process $data ...
  //Ensure the array keys are not modified during the processing
  return $data; 
}

$data = [1,2,3,4,5];

$processedData = processData($data);

print_r($processedData); //Outputs: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
```