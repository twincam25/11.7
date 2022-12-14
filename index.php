<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Comparison & logic operation results</title>
</head>
<body>
    <div>
        <table>
            <caption>Таблица истинности PHP</caption>
            <thead>
                <tr>
                    <th>A</th>
                    <th>B</th>
                    <th>!A</th>
                    <th>A || B</th>
                    <th>A & B</th>
                    <th>A xor B</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td>0</td>
                <td>0</td>
                <td>
                    <?php
                         $a = 0;
                         $b = 0;
                         echo !$a;
                    ?>
                </td>
                <td>
                    <?php
                        echo (int)($a || $b);
                    ?>
                </td>
                <td>
                    <?php
                        echo $a & $b;
                    ?>
                </td>
                <td>
                    <?php
                        echo (int)($a xor $b);
                    ?>
                </td>
            </tr>
            <tr>
                <td>0</td>
                <td>1</td>
                <td>
                    <?php
                        $a = 0;
                        $b = 1;
                        echo !$a;
                    ?>
                </td>
                <td>
                    <?php
                        echo $a || $b;
                    ?>
                </td>
                <td>
                    <?php
                        echo $a & $b;
                    ?>
                </td>
                <td>
                    <?php
                        echo $a xor $b;
                    ?>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>0</td>
                <td>
                    <?php
                        $a = 1;
                        $b = 0;
                        echo (int)!$a;
                    ?>
                </td>
                <td>
                    <?php
                        echo $a || $b;
                    ?>
                </td>
                <td>
                    <?php
                        echo $a & $b;
                    ?>
                </td>
                <td>
                    <?php
                        echo $a xor $b;
                    ?>
                </td>
              </tr>
              <tr>
                  <td>1</td>
                  <td>1</td>
                  <td>
                      <?php
                          $a = 1;
                          $b = 1;
                          echo (int)!$a;
                      ?>
                  </td>
                  <td>
                      <?php
                          echo $a || $b;
                      ?>
                  </td>
                  <td>
                      <?php
                          echo $a & $b;
                      ?>
                  </td>
                  <td>
                      <?php
                          echo (int)($a xor $b);
                      ?>
                  </td>
              </tr>
            </tbody>    
        </table>
        <table>
            <caption>Гибкое сравнение в PHP</caption>
            <thead>
                <tr>
                    <th></th>
                    <th>true</th>
                    <th>false</th>
                    <th>1</th>
                    <th>0</th>
                    <th>-1</th>
                    <th>"1"</th>
                    <th>null</th>
                    <th>"php"</th>
                </tr>
            </thead>        
            <tbody>
                <tr>
                    <td>true</td>
                    <td>
                        <?php $x = true; $y = true; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = false; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = 1; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = 0; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = -1; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = "1"; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = null; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = "php"; echo $x == $y ? 'true': 'false';?>
                    </td>
                </tr>
                <tr>
                    <td>false</td>
                    <td>
                        <?php $x = false; $y = true; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = false; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = 1; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = 0; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = -1; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = "1"; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = null; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = "php"; echo $x == $y ? 'true': 'false';?>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <?php $x = 1; $y = true; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = false; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = 1; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = 0; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = -1; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = "1"; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = null; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = "php"; echo $x == $y ? 'true': 'false';?>
                    </td>
                </tr>
                <tr>
                    <td>0</td>
                    <td>
                        <?php $x = 0; $y = true; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = false; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = 1; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = 0; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = -1; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = "1"; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = null; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = "php"; echo $x == $y ? 'true': 'false';?>
                    </td>
                </tr>
                <tr>
                    <td>-1</td>
                    <td>
                        <?php $x = -1; $y = true; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = false; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = 1; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = 0; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = -1; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = "1"; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = null; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = "php"; echo $x == $y ? 'true': 'false';?>
                    </td>
                </tr>
                <tr>
                    <td>"1"</td>
                    <td>
                        <?php $x = "1"; $y = true; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = false; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = 1; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = 0; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = -1; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = "1"; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = null; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = "php"; echo $x == $y ? 'true': 'false';?>
                    </td>
                </tr>
                <tr>
                    <td>null</td>
                    <td>
                        <?php $x = null; $y = true; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = false; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = 1; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = 0; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = -1; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = "1"; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = null; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = "php"; echo $x == $y ? 'true': 'false';?>
                    </td>
                </tr>
                <tr>
                    <td>"php"</td>
                    <td>
                        <?php $x = "php"; $y = true; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = false; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = 1; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = 0; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = -1; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = "1"; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = null; echo $x == $y ? 'true': 'false';?>
                    </td>
                    <td>
                        <?php $y = "php"; echo $x == $y ? 'true': 'false';?>
                    </td>
                </tr>
            </tbody>
                    
        </table>        
        <table>
            <caption>Жёсткое сравнение в PHP</caption>
            <thead>
                <tr>
                    <th></th>
                    <th>true</th>
                    <th>false</th>
                    <th>1</th>
                    <th>0</th>
                    <th>-1</th>
                    <th>"1"</th>
                    <th>null</th>
                    <th>"php"</th>
                </tr>
            </thead>        
            <tbody>
                <tr>
                    <td>true</td>
                    <td>
                        <?php $x = true; $y = true; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = false; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = 1; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = 0; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = -1; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = "1"; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = null; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = "php"; echo (int)($x === $y);?>
                    </td>
                </tr>
                <tr>
                    <td>false</td>
                    <td>
                        <?php $x = false; $y = true; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = false; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = 1; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = 0; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = -1; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = "1"; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = null; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = "php"; echo (int)($x === $y);?>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <?php $x = 1; $y = true; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = false; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = 1; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = 0; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = -1; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = "1"; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = null; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = "php"; echo (int)($x === $y);?>
                    </td>
                </tr>
                <tr>
                    <td>0</td>
                    <td>
                        <?php $x = 0; $y = true; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = false; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = 1; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = 0; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = -1; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = "1"; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = null; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = "php"; echo (int)($x === $y);?>
                    </td>
                </tr>
                <tr>
                    <td>-1</td>
                    <td>
                        <?php $x = -1; $y = true; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = false; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = 1; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = 0; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = -1; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = "1"; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = null; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = "php"; echo (int)($x === $y);?>
                    </td>
                </tr>
                <tr>
                    <td>"1"</td>
                    <td>
                        <?php $x = "1"; $y = true; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = false; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = 1; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = 0; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = -1; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = "1"; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = null; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = "php"; echo (int)($x === $y);?>
                    </td>
                </tr>
                <tr>
                    <td>null</td>
                    <td>
                        <?php $x = null; $y = true; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = false; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = 1; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = 0; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = -1; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = "1"; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = null; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = "php"; echo (int)($x === $y);?>
                    </td>
                </tr>
                <tr>
                    <td>"php"</td>
                    <td>
                        <?php $x = "php"; $y = true; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = false; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = 1; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = 0; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = -1; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = "1"; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = null; echo (int)($x === $y);?>
                    </td>
                    <td>
                        <?php $y = "php"; echo (int)($x === $y);?>
                    </td>
                </tr>
            </tbody>
        </table>   
        <h4>Вывод о разнице "гибкого и "жесткого" сравнения в PHP:</h4>
        <p>Перед гибким (мягким) сравнении производится приведедением операндов к единому типу.
            При "жестком" сравнении<br> приведения типов не происходит, и для равества операндов необходимо совпадение не только значений, но и их типов.</p>   
    </div>
    
</body>
</html>