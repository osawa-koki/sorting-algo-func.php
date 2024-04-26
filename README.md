# sorting-algo-func.php

📊📊📊 PHPで整列アルゴリズムを実装してみる！  

## 実行方法

```shell
composer run-script start

# ShuffledArray: 9, 3, 1, 7, 5, 6, 4, 0, 8, 2
# BubbleSort   : 0, 1, 2, 3, 4, 5, 6, 7, 8, 9
# ShuffledArray: 5, 0, 3, 8, 1, 9, 2, 6, 7, 4
# SelectionSort: 0, 1, 2, 3, 4, 5, 6, 7, 8, 9
# ShuffledArray: 8, 2, 1, 9, 7, 6, 3, 5, 0, 4
# InsertionSort: 0, 1, 2, 3, 4, 5, 6, 7, 8, 9
# ShuffledArray: 1, 9, 7, 0, 8, 5, 2, 3, 4, 6
# MergeSort    : 0, 1, 2, 3, 4, 5, 6, 7, 8, 9
# ShuffledArray: 8, 7, 3, 4, 2, 5, 6, 1, 0, 9
# QuickSort    : 0, 1, 2, 3, 4, 5, 6, 7, 8, 9
# ShuffledArray: 0, 3, 6, 2, 5, 8, 4, 7, 9, 1
# HeapSort     : 0, 1, 2, 3, 4, 5, 6, 7, 8, 9
```

```shell
docker build -t sorting-algo-func-php .
docker run -it --rm --name sorting-algo-func-php sorting-algo-func-php
```
