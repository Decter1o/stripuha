<?php
include_once (__DIR__ . '/../src/models/DB.php');
class User extends DB{
    private $id;
    private $email;
    private $password;
    private $role;

    function init($id, $email, $password, $role){
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
        return $this;
    }

    function getId(){
        return $this->id;
    }
    function getEmail(){
        return $this->email;
    }
    function getPassword(){
        return $this->password;
    }
    function getRole(){
        return $this->role;
    }

    private function connect(){
        return parent::DBconnect();
    }

    function Verification($email, $password){
        $pdo = $this->connect();

        if($pdo){
            try {
                $queryString = "SELECT * FROM users WHERE email = :email";
                $result = $pdo->query($queryString);   
                $result->bindParam(':email', $email);
                $result->execute();
                $user = $result->fetch(PDO::FETCH_ASSOC);
                if($user){
                    if(password_verify($password, $user['password'])){
                        return json_encode(array(
                            'status' => true,
                            'data' => array(
                                'id' => $user['id']
                            )
                        ));
                    } else {
                        return json_encode(array(
                            'status' => false,
                            'message' => 'Invalid password or email'
                        ));
                    }
                } else {
                    return json_encode(array(
                        'status' => false,
                        'message' => 'User not found'
                    ));
                }
            } catch (PDOException $e) {
                return json_encode(array(
                    'status' => false,
                    'message' => 'Database error: ' . $e->getMessage()
                ));
            }
        }
        return json_encode(array(
            'status' => false,
            'message' => 'Database connection failed'
        ));
    }

    
}