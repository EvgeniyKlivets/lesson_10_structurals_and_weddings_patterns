<?php
class Contscts
{

}
interface NewContact
{
    public function name($value):NewContact;
     public function surname($value):NewContact;
      public function phone($value):NewContact;
       public function email($value):NewContact;
        public function adress($value):NewContact;
}
class Contact implements NEwContact
{
    private $contact;
    public function _construct()
    {
        $this->reset();
    }
    public function reset():NewContact
    {
        $this->contact=new Contacts();
        return $this;
    }
    public function name($value): NewContact
    {
        $this->contact->name = $value;
        return $this;
    }
    public function surname($value): NewContact
    {
        $this->contact->surname = $value;
        return $this;
    }
    public function email($value): NewContact
    {
        $this->contact->email = $value;
        return $this;
    }
    public function address($value): NewContact
    {
        $this->contact->address = $value;
        return $this;
    }
    public function phone($value): NewContact
    {
        $this->contact->phone = $value;
        return $this;
    }
    public function build(): Contacts
    {
        $build - $this->contact;
        $this->reset();
        return $build;
    }
}
$contact = new Contact ();
$newContact = $contact->phone('015-523-568')
    ->name("John")
    ->surname("Smit")
    ->email("JohnSmit@email.com")
    ->address("Str.Left")
    ->build();

$newContact2 = $contact->phone('056-649-256')
    ->name("Frensis")
    ->surname("Jackson")
    ->email("frank@email.com")
    ->address("Str.Manheten")
    ->build();
echo '<pre>';
print_r($newContact);
print_r($newContact2);
echo '</pre>';