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

    public function __construct (array $clientDatas) {
        $this->firstname = $clientDatas['firstname'];
        $this->lastname = $clientDatas['lastname'];
        $this->email = $clientDatas['email'];
        $this->phone = $clientDatas['phone'];
        $this->adress = $clientDatas['adress'];
        $this->city = $clientDatas['city'];
        $this->country = $clientDatas['country'];
        $this->username = $clientDatas['username'];
        $this->pass = $clientDatas['pass'];
        $this->avatar = $clientDatas['avatar'];
    }

    public function createCustomer(Client $newClient) : bool{
        $pdo = new PDO("mysql:host=localhost;dbname=gestion_client", 'Alker51', 'AlkerTestDev');
        $pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);

        $unbufferedResult = $pdo->query("SELECT email FROM City");
        foreach ($unbufferedResult as $row) {
            echo $row['email'] . PHP_EOL;
            echo $newClient . PHP_EOL;
        }

        return true;
    }
}
?>