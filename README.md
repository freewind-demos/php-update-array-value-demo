Php Update Array Value Demo
====================

PHP中这里很好直觉，像下面这样直接修改一个array的value不失效：

```
foreach ($obj as $item) {
    $item['required'] = false;
}
```

而必须像这样：

```
foreach ($obj as $key => $value) {
    $aaa[$key]['required'] = false;
}
```

这里的`$value`虽然没有用上，也要写上以符合结构。

```
php hello.php
```
