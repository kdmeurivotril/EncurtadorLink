<?php
class AuthController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function redirect($code) {
        $url = $this->userModel->getUrlByCode($code);
        if ($url) {
            header("Location: " . $url);
            exit;
        } else {
            echo "Link não encontrado!";
        }
    }
}
?>
