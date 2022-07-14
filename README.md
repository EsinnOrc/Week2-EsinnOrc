# week2-EsinnOrc

## camelCase ve PascalCase
Programlama dillerinde sınıf veya değişken isimlerini yazarken iki veya daha fazla sözcükten oluşuyorsa aralarındaki boşlukları kaldırmamız gerekir. Bazı programlama dillerinde boşluklar farklı anlamlara gelebilir.  Her kelime ayrı bir kavram olarak tanımlandığından tanımlamaları bitişik yazmak durumunda kalınır. Bu neden dolayı camelCase, PascalCase, sanake_case ve kebab-case gibi yazım türleri ortaya çıkmıştır. camelCase ve PascalCase incelecek olursak yapı olarak birbirlerine benzer durmaktadır ancak camelCase’de ilk kelimenin baş harfi küçük ondan sonra gelen kelimelerin ilk harfi büyük yazılır. Çoğu dilde değişken tanımlanırken camelCase kullanılır. PascalCase’i camelCase’den farklı kılan özelliğe bakacak olursak PascalCase’de ilk kelime dahil olmak üzere tüm kelimelerin ilk harfi büyük yazılır.  Birçok dilde sınıf isimleri PAscalCase ile yazılır.

## LINUX COMMANDS
- Tail: Log dosyalarını incelerken kolaylık sağlar. Son 10 satırı görmemizi sağlar.headla arasındaki fark budur.
- Cat: Catenate’in kısaltmasıdır. Dosyaları açmamızı sağlar ancak dosya icersinde işlem yapılmasına izin vermez. Salt okunma olarak açılmasını sağlar.
- Sudo: Yetkili olarak işlem yapmamızı sağlar. Root seviyede işlem yapılmasına izin verir.
- Touch: Komut satırı üzerinden farklı türde dosya oluşturmamıza yardımcı olur. Touch komutu çeşitli seçenekleri vardır.  Touch -a erişim zamanını değiştirmeye yardımcı olur. Touch -c dosyanın oluşturulup oluşturulmadığını kontrol etmek için kullanılır. Touch -cd erişim ve değişiklik zamanını güncellemek için kullanılır. Touch -m sadece son değişiklik zamanını günceller. Touch -r iki dosya arasında güncelleme yapar. Touch -t belirli bir tarihte oluşturmaya yardımcı olur. 
- Mkdir: Yeni bir dosya veya dizin oluşturmak için kullanılır.

## OBJECT ORIENTED PROGRAMMING
```

<?php

abstract class Vehicles
{
   
    public $brand;
    public $model;
    public $plateNo;
    public $numberWheels;
    public $wingSpan;
  


    public function __construct($plateNo, $brand, $model, $numberWheels, $wingSpan)
    {
        $this->plateNo = $plateNo;
        $this->brand = $brand;
        $this->model = $model;
        $this->numberWheels = $numberWheels;
        $this->wingSpan = $wingSpan;
    }
     
    function setModel($model){
        $this->model = $model;
    }
    function getModel(){
       return $this->model; 
    }
       
    function setWingSpan($wingSpan){
        $this->wingSpan = $wingSpan;
    }
    function getWingSpan(){
       return $this->wingSpan; 
    }
    
    function setPlateNo($plateNo){
        $this->plateNo = $plateNo;
    }
    function getPlateNo(){
       return $this->plateNo; 
    }
    
    function setNumberWheels($numberWheels){
        $this->numberWheels = $numberWheels;
    }
    
    function getNumberWheels(){
       return $this->numberWheels; 
    }

    function setBrand($brand){
        $this->brand = $brand;
    }
    function getBrand(){
       return $this->brand; 
    }

    abstract public function vehiclesType();
}

class Car extends Vehicles
{
 public function __construct($plateNo, $brand, $model, $numberWheels, $wingSpan)
    {
        parent::__construct($plateNo, $brand, $model, $numberWheels, $wingSpan);
    }

    public function vehiclesType()
    {
        return "$this->plateNo $this->brand $this->model $this->numberWheels $this->wingSpan\n";
    }
}

class Motorcycle extends Vehicles
{
    public function __construct($plateNo, $brand, $model, $numberWheels, $wingSpan)
    {
        parent::__construct($plateNo, $brand, $model, $numberWheels, $wingSpan);
    }

    public function vehiclesType()
    {
        return "$this->plateNo $this->brand $this->model $this->numberWheels $this->wingSpan\n";
    }
   
}

class Plane extends Vehicles
{
    public function __construct($plateNo, $brand, $model, $numberWheels, $wingSpan)
    {
        parent::__construct($plateNo, $brand, $model, $numberWheels, $wingSpan);
    }

    public function vehiclesType()
    {
        return " $this->brand $this->model $this->wingSpan\n";
    }
}


$car = new Car("00 XWX 01 ","Tesla","ZWXI-3",4,"");
$car->setPlateNo('Değişiklik');
$car->setBrand('yeni');
$car->setModel('Düzenleme');
$car->setNumberWheels(4);

echo $car->vehiclesType();

$motorcycle =  new Motorcycle("01 CYC 00","anka","CYC-40",2,"");
echo $motorcycle->vehiclesType();

$plane =  new Plane("","starPlane","PLN-36","","2ft");
echo $plane->vehiclesType();
?>


```
