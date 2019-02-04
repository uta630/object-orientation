<?php

// 抽象クラス : クラスの設計図
abstract class Abs {
    abstract protected function Foo();
}

// インターフェース : クラスに必須で実装するメソッド
interface foooo {
    // ゲッター, セッター
    public function getFoo();
    public function setFoo();
}

// 親クラス : 処理の元になるクラス
class Obj extends Abs implements foooo {
    // 初期値
    protected $foo;

    // コンストラクタ : 初期設定
    protected function __construct($foo){
        $this->foo = $foo;
    }

    // 抽象クラスから継承されたメソッド
    protected function Foo(){
        echo 'Foo!';
    }

    // インターフェースから継承されたメソッド
    protected function getFoo(){
        return $this->foo;
    }
    protected function setFoo($foo){
        $this->foo = $foo;
    }
}

// インスタンスの生成
$obj = new Obj();
echo $obj->getFoo();



// 子クラス : 親クラスを元に、個別に拡張するクラス
class Child extends Obj {
    // 子クラスのプロパティを追加
    public $bar;

    public function __construct($foo, $bar){
        parent::__construct($foo); // 親クラスのコンストラクタを継承
        $this->bar = $bar;
    }

    // 親クラスのメソッドをオーバーライド
    public function Foo(){
        echo 'Foooo!';
    }

    public function getFoo(){
        return $this->foo;
    }
    public function setFoo($foo){
        $this->foo = $foo;
    }
}

// インスタンスの生成
$child = new Child();
echo $child->getFoo();

?>