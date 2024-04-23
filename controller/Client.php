<?php
class Client {
    public const DB_HOST = "localhost";
    public const DB_USER= "Alker51";
    public const DB_PASS = "AlkerTestDev";
    public const DB_NAME = "gestion_client";

    function createCustomer(array $newClient) : bool {
        if($newClient['pass'] !== $newClient['passCheck']){
            return false;
        }

        $conn = new mysqli(self::DB_HOST, self::DB_USER, self::DB_PASS, self::DB_NAME);

        if ($conn->connect_error) {
            die("Connexion échouée: " . $conn->connect_error);
        }

        $username = $newClient['username'];
        $firstname = $newClient['firstname'];
        $lastname = $newClient['lastname'];
        $email = $newClient['email'];
        $phone = $newClient['phone'];
        $adress = $newClient['adress'];
        $city = $newClient['city'];
        $country = $newClient['country'];
        $username = $newClient['username'];
        $pass = password_hash($$newClient['pass'], PASSWORD_DEFAULT);
        if(!empty($newClient['avatar'])) {
            $avatar = $newClient['avatar'];
        } else {
            $avatar = "https://ui-avatars.com/api/?name=".$username ."&length=2&rounded=true&background=random";
        }

        $stmt = $conn->prepare("INSERT INTO client (username, firstname, lastname, email, phone, adress, city, country, pass, avatar) 
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        if (!$stmt) {
            die("Échec de la préparation de la requête: " . $conn->error);
        }

        $stmt->bind_param("ssssssssss", $username, $firstname, $lastname, $email, $phone, $adress, $city, $country, $pass, $avatar);
        
        $result = $stmt->execute();
        $stmt->close();
        $conn->close();

        return true;
    }
}
?>
