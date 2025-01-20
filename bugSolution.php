```php
function processData(array $data): array {
  $processedData = [];
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $processedData[$key] = processData($value); // Recursive call
    } elseif (is_string($value) && str_starts_with($value, '@')) {
      // Handle special strings starting with '@'
      $processedData[$key] = 'Processed_' . substr($value, 1);
    } else {
      $processedData[$key] = $value; // Keep other values unchanged
    }
  }
  return $processedData;
}

$input = ['a' => 1, 'b' => ['c' => 2, 'd' => '@special'], 'e' => '@another'];
$result = processData($input);
print_r($result);
```