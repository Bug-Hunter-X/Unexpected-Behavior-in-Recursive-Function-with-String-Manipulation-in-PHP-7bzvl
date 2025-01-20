```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call
    } elseif (is_string($value) && str_starts_with($value, '@')) {
      // Handle special strings starting with '@'
      $data[$key] = 'Processed_' . substr($value, 1);
    }
  }
  return $data;
}

$input = ['a' => 1, 'b' => ['c' => 2, 'd' => '@special'], 'e' => '@another'];
$result = processData($input);
print_r($result);
```