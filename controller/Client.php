<?php
class Client {
    public string $firstname;
    public string $lastname;
    public string $email;
    public string $phone;
    public string $adress;
    public string $city;
    public string $country;
    public string $username;
    public string $pass;
    public string $avatar;
    private string $rib;
    private string $bic;

    public function __construct (
        string $firstname, string $lastname,
        string $email, string $phone,
        string $adress, string $city,
        string $country, string $username,
        string $pass, string $avatar
    ){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->phone = $phone;
        $this->adress = $adress;
        $this->city = $city;
        $this->country = $country;
        $this->username = $username;
        $this->pass = $pass;
        $this->avatar = $avatar;
    }

    public function createCustomer() : bool{
        $pdo = new PDO("mysql:host=localhost;dbname=gestion_client", 'Alker51', 'AlkerTestDev');
        $pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);

        $unbufferedResult = $pdo->query("SELECT email FROM City");
        foreach ($unbufferedResult as $row) {
            echo $row['email'] . PHP_EOL;
        }

        return true;
    }
}
?>