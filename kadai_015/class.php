<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎_課題015</title>
</head>

<body>
      <p>
         <?php
         // Foodクラスを定義する
         class Food {
             // プロパティを定義する                        
             private $name;
             private $price;
 
             // コンストラクタを定義する
             public function __construct(string $name, int $price) {
                 $this->name = $name;
                 $this->price = $price;
             }
             //メソッドを追加（今回追加）
            function show_price() {
                $show_price = '25';
                echo $show_price . '<br>';
             }
         }
 
         // インスタンス化する
         $Food = new Food('potato', 250);
 
         // インスタンス$userの各プロパティの値を出力する
         print_r($Food);
         echo '<br>';

          // Animalクラスを定義する
          class Animal {
              // プロパティを定義する                        
              private $name;
              private $height;
              private $weight;
        
              // コンストラクタを定義する
              public function __construct(string $name, int $height ,int $weight) {
                  $this->name = $name;
                  $this->height = $height;
                  $this->weight = $weight;
                  }
              //メソッドを追加(今回追加)
              function show_height() {
                $show_height = '60';
                echo $show_height . '<br>';
               }

          }
        
          // インスタンス化する
            $Animal = new Animal('dog', 60 ,5000);
        
          // インスタンス$userの各プロパティの値を出力する
            print_r($Animal);
            echo '<br>';
          //メソッドを実行（今回追加）
          $Food->show_price();
          $Animal->show_height();
         ?>
     </p>
</body>

</html>