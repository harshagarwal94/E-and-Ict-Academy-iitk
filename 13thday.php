class myclass
{
public $a='public';
protected $b='protected';
private $c='private';
 function printhello()
{
echo $this->$a;

echo $this->$b;
echo $this->$c;
}


}