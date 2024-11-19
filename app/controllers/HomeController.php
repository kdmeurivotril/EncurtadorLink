<?php
class HomeController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function shorten() {
        if (isset($_POST['url'])) {
            $url = $_POST['url'];
            $code = $this->userModel->createShortUrl($url);
            echo "Link encurtado: http://seusite.com/" . $code;
        } else {
            echo "URL inválida!";
        }
    }
}
?>
