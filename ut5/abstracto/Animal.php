<?php
interface Mammal{
    public function lactate();
}
abstract class Animal{
    protected static int $population = 0;
    public int $id;
    abstract public function makeSound(string $decorator);
    public function run(){
        echo "Running";
    }
}

class Cat extends Animal implements Mammal{
    public int $age;
    public string $name;
    public string $sex;
    protected int $catId;
    public array $friends;
    
    public function __construct(int $age, string $name, string $sex) {
        $this->age = $age;
        $this->name = $name;
        $this->sex = $sex;
        parent::$population++;
        $this->catId = parent::$population;
        $this->friends = [];
    }
    
    #[\Override]
    public function makeSound(string $decorator) {
        echo "$decorator Meow $decorator";
    }
    #[\Override]
    public function lactate(){
        echo "Glu Glu";
    }
    
    
    public function getId():int{
        return $this->catId;
    }
    
    #[\Override]
    public function __toString():string{
        $result = "";
        $result .= "<h2>Gato" .  $this->catId . "</h2>";
        foreach($this as $k => $v){
            if(is_array($v)){
                $result .= "<ul>";
                foreach ($v as $key => $value) {
                    $result .= "<li>$key --> $value</li>";
                }
                $result .= "</ul>";
            }else{
                $result .= "<p>$k --> $v</p>";
            }
        }
        return $result;
    }
    
    public function addFriend(Cat $other){
        $this->friends[] = $other;
    }
    
}

$gato = new Cat(2, "Bigotes", "M");
$gato_2 = new Cat(4, "Lana", "H");
$gato_3 = new Cat(5, "Pinzas", "H");
$gato_4 = new Cat(7, "Maria Dolores", "M");
$gato->run();
$gato->addFriend($gato_2);
$gato->addFriend($gato_3);
$gato->addFriend($gato_4);

echo "<br>";
$gato->makeSound("-_-");
echo "<br>";
$gato->lactate();
echo "<br>";
echo "<table>";
foreach($gato as $k => $v){
    echo "<tr>";
    echo "<td>$k</td>";
    echo "<td>$v</td>";
    echo "</tr>";
}
echo "</table>";
echo "<br>";
echo $gato->getId();
echo "<br>";
echo $gato;

$gato_5 = $gato;
echo "<br>";
echo $gato_5;